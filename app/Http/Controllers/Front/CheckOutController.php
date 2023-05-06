<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderData;
use App\Models\OrderDetail;
use App\Utilities\VNpay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use DB;
use Session;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Redirect;

class CheckOutController extends Controller
{
    public  function AuthLogin(){
        $admin_id =Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }

    public function login_checkout(){
        $cate_product = DB::table('product_categories')->orderby('id','desc')->get();
        $brand_product = DB::table('brands')->orderby('id','desc')->get();
        return view('front.checkout.login_checkout',compact('cate_product','brand_product'));
    }
    public function sign_up_checkout(){
        $cate_product = DB::table('product_categories')->orderby('id','desc')->get();
        $brand_product = DB::table('brands')->orderby('id','desc')->get();
        return view('front.checkout.sign_up_checkout',compact('cate_product','brand_product'));
    }
    public function add_customer(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_password' => 'required|min:6',
        ],[
            'customer_name.required'=>'Bạn chưa nhập tên',
            'customer_email.required'=>'Bạn chưa nhập email',
            'customer_phone.required'=>'Bạn chưa nhập số điện thoại',
            'customer_password.required'=>'Bạn chưa nhập mật khẩu',
            'customer_password.min' =>'Mật khẩu ít nhất là 6 ký tự',
        ]);

        $data = array();
        $data['customer_name']= $request->customer_name;
        $data['customer_email']= $request->customer_email;
        $data['customer_password']= md5($request->customer_password);
        $data['customer_phone']= $request->customer_phone;

        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);

        return Redirect::to('/checkout');
    }
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index',compact('carts','total','subtotal'));
    }

    public  function addOrder(Request $request){

            $order = Order::create($request->all());

            $order_data = [
                'customer_id' => Session::get('customer_id'),
                'shipping_id' => $order->shipping_id,
                'order_status' => 'Đang chờ xử lý',
            ];
            $order_id = DB::table('tbl_order')->insertGetId($order_data);
            OrderData::create($order_data);

            $carts = Cart::content();

            foreach ($carts as $cart) {
                $order_d_data = [
                    'order_id' => $order_id,
                    'shipping_id' => $order->shipping_id,
                    'product_id' => $cart->id,
                    'product_name' => $cart->name,
                    'product_price' => $cart->price,
                    'product_sales_quantity' => $cart->qty,
                ];
                OrderDetail::create($order_d_data);

            }
            if($request->payment_type == '2' ) {

            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);

            Cart::destroy();

            return redirect('checkout/result')->with('notification', 'Thanh toán thành công. Hãy kiểm tra email');
            }
            if($request->payment_type == '1' )
            {
//                // Lấy url thanh toán vnpay
//            $data_url =VNpay::vnpay_create_payment([
//                'vnp_TxnRef' => $order->shipping_id,
//                'vnp_OrderInfo'=>'Mô tả về đơn hàng ở đây...',
//                'vnp_Amount'=>Cart::total(0, '', ''),
//            ]);
//            return redirect()->to($data_url);
                return redirect('/vnpay_checkout');
            }
            else{
            return 'Phương thức thanh toán chưa hỗ trợ';
            }
    }

    public function vnPayCheck(Request $request){
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        if($vnp_ResponseCode != null){
            if($vnp_ResponseCode == 00){
            $order = Order::find($vnp_TxnRef);
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order,$total,$subtotal);

            Cart::destroy($order);
            }
            return redirect('checkout/result')->with('notification', 'Thanh toán online thành công. Hãy kiểm tra email');
        }
        else
        {
            Order::find($vnp_TxnRef)->delete();

            return redirect('checkout/result')->with('notification', 'Thanh toán không thành công hoặc bị hủy');
        }
    }

    private function sendEmail($order,$total,$subtotal){
        $email_to= $order->shipping_email;

        Mail::send('front.checkout.email',compact('order','total','subtotal'),
            function ($message) use($email_to){
            $message->from('tinofashionshop@gmail.com','Tino Fashion Shop');
            $message->to($email_to,$email_to);
            $message->subject('Thông báo đơn hàng');
        });

    }

    public function result(){
        $notification = session('notification');
        return view('front.checkout.result',compact('notification'));
    }
    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/login_checkout');
    }

    public function login_customer(Request $request){
        $request->validate([
            'email_account' => 'required',
            'password_account' => 'required|min:6',
        ],[
            'email_account.required'=>'Bạn chưa nhập địa chỉ email',
            'password_account.required'=>'Bạn chưa nhập mật khẩu',
            'password_account.min' =>'Mật khẩu ít nhất là 6 ký tự',
        ]);
        $email =$request->email_account;
        $password =md5($request->password_account);
        $result =DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();

        if($result){
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }
        else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai');
            return Redirect::to('/login_checkout');
        }

    }

    public function view_order(){
        $this->AuthLogin();
        $order_by_id = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->join('orders','tbl_order.shipping_id','=','orders.shipping_id')
            ->join('order_details','tbl_order.order_id','=','order_details.order_id')
            ->select('tbl_order.*','tbl_customer.*','orders.*','order_details.*')
            ->first();

        $manager_order_by_id  = view('admin.view_order')->with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
    }
    public function vnpay_checkout(){
        return view('front.vnpay.vnpay_checkout');
    }



}

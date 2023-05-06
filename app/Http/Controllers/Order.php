<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class Order extends Controller
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

    public function manage_order(){
        $this->AuthLogin();
        $all_order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->select('tbl_order.*','tbl_customer.customer_name')
            ->orderby('tbl_order.order_id','desc')->get();
        $manager_order  = view('admin.manager_order')->with('all_order',$all_order);
        return view('admin_layout')->with('admin.manager_order', $manager_order);
    }

    public function view_order($order_code){
        $order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
        $getorder = Order::where('order_code',$order_code)->get();
        foreach($getorder as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
            $order_status = $ord->order_status;
        }
        $customer = Customer::where('customer_id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();

        $order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

        foreach($order_details_product as $key => $order_d){

            $product_coupon = $order_d->product_coupon;
        }
        if($product_coupon != 'no'){
            $coupon = Coupon::where('coupon_code',$product_coupon)->first();
            $coupon_condition = $coupon->coupon_condition;
            $coupon_number = $coupon->coupon_number;
        }else{
            $coupon_condition = 2;
            $coupon_number = 0;
        }

        return view('admin.view_order')->with(compact('order_details','customer','shipping','coupon_condition','coupon_number','getorder','order_status'));

    }
}

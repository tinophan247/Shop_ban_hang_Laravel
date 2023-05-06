<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class User extends Controller
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
    public function add_user(){
        $this->AuthLogin();
        return view('admin.user.add_user');
    }

    public function all_user(){
        $this->AuthLogin();
        $all_user =DB::table('tbl_customer')->orderby('customer_id','desc')->get();
        $manage_user = view('admin.user.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('all_user',$manage_user);

    }

    public function save_user(Request $request){
        $this->AuthLogin();

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
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        DB::table('tbl_customer')->insert($data);
        Session::put('message','Thêm user thành công');
        return Redirect::to('all-user');
    }

    public function edit_user($customer_id){
        $this->AuthLogin();

        $edit_user = DB::table('tbl_customer')->where('customer_id',$customer_id)->get();
        $manager_user  = view('admin.user.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.edit_user', $manager_user);
    }

    public function update_user(Request $request,$customer_id){
        $this->AuthLogin();
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        DB::table('tbl_customer')->where('customer_id',$customer_id)->update($data);
        Session::put('message','Cập nhật user thành công');
        return Redirect::to('all-user');
    }

    public function delete_user($customer_id){
        $this->AuthLogin();
        DB::table('tbl_customer')->where('customer_id',$customer_id)->delete();
        Session::put('message','Xóa user thành công');
        return Redirect::to('all-user');
    }
}

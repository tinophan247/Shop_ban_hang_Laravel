<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ProductCategoty;
use Illuminate\Http\Request;
use DB;
// use brandProductModel;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
session_start();

class Products extends Controller
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
    public function add_product(){
        $this->AuthLogin();

        $cate_product= DB::table('product_categories')->orderby('id','desc')->get();
        $brand_product= DB::table('brands')->orderby('id','desc')->get();

        return view('admin.add_product',compact('cate_product','brand_product'));
    }

    public function all_product(){
        $this->AuthLogin();

        $all_product =DB::table('products')->orderby('id','desc')->get();
        $manage_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('all_product',$manage_product);

    }
//
    public function save_product(Request $request){
        $this->AuthLogin();

        $data = array();

        $data['name'] = $request->name;
        $data['qty'] = $request->qty;
        $data['discount'] = $request->discount;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['content'] = $request->pcontent;
        $data['product_category_id'] = $request->product_cate;
        $data['tag'] = $request->tag;
        $data['brand_id'] = $request->brand;

        $get_image = $request->file('path');
        $path = 'front/img/product/products';
        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image =current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $data['path'] = $new_image;
            DB::table('products')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-product');

        }
        $data['path']='';
        DB::table('products')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('products')->where('id',$product_id)->update(['status'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-product');

    }

    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('products')->where('id',$product_id)->update(['status'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();

        $cate_product = DB::table('product_categories')->orderby('id','desc')->get();
        $brand_product = DB::table('brands')->orderby('id','desc')->get();

        $edit_product = DB::table('products')->where('id',$product_id)->get();

        $manager_product  = view('admin.edit_product',compact('edit_product','cate_product','brand_product'));

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request,$product_id)
    {
        $this->AuthLogin();

        $data = array();

        $data['name'] = $request->name;
        $data['qty'] = $request->qty;
        $data['discount'] = $request->discount;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['content'] = $request->pcontent;
        $data['product_category_id'] = $request->product_cate;
        $data['tag'] = $request->tag;
        $data['brand_id'] = $request->brand;
        $get_image = $request->file('path');

        $path = 'front/img/product/products';
        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image =current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $data['path'] = $new_image;
            DB::table('products')->where('id',$product_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');

        }
        DB::table('products')->where('id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }


    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('products')->where('id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
}

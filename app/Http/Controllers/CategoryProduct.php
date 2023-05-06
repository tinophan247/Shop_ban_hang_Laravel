<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use CategoryProductModel;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
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
    public function add_category_product(){
        $this->AuthLogin();
//        $category = CategoryProductModel::where('category_parent',0)->orderBy('id','DESC')->get();
//        return view('admin.add_category_product',compact('category'));
        return view('admin.add_category_product');
    }

    public function all_category_product(){
        $all_category_product =DB::table('product_categories')->orderby('id','desc')->get();
        $manage_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('admin_layout')->with('all_category_product',$manage_category_product);

}

    public function save_category_product(Request $request){
        $this->AuthLogin();

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('product_categories')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }


    public function edit_category_product($category_product_id){
        $this->AuthLogin();


        $edit_category_product = DB::table('product_categories')->where('id',$category_product_id)->get();

//        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product)->with('category',$category);
        $manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('product_categories')->where('id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function delete_category_product($category_product_id){
        $this->AuthLogin();
        DB::table('product_categories')->where('id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
}

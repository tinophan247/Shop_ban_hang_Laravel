<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $menProducts = Product::where('product_category_id',1)->get();
        $womenProducts = Product::where('product_category_id',2)->get();
        $jacketProducts = Product::where('product_category_id',3)->get();
        $shoesProducts = Product::where('product_category_id',4)->get();
        $accessoryProducts = Product::where('product_category_id',5)->get();
        $secondhandProducts = Product::where('product_category_id',6)->get();
        $blogs = Blog::orderBy('id','desc')->limit(4)->get();

        return view('front.index' , compact('menProducts', 'womenProducts','jacketProducts','shoesProducts','accessoryProducts','secondhandProducts','blogs'));
    }
    public function about_us(){
        return view('front.about_us');
    }
}

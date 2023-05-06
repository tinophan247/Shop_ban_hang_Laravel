<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategoty;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id){
        //get category
        $categories = ProductCategoty::all();
        //get brand
        $brands =Brand::all();

        $product = Product::findOrFail($id);

        $avgRating =0;
        $sumRating = array_sum(array_column($product->productComments->toArray(),'rating'));
        $countRating = count($product->productComments);
        if ($countRating !=0)
        {
            $avgRating = $sumRating/$countRating;
        }
        $relatedProducts = Product::where('product_category_id',$product->product_category_id)->where('tag',$product->tag)->limit(4)->get();

        return view('front.shop.show',compact('product','categories','brands','avgRating','relatedProducts'));
    }

    public function index(Request $request)
    {
        //get category
        $categories = ProductCategoty::all();
        //get brand
        $brands =Brand::all();

        //get product
        $perpage = $request->show ?? 12;
        $sortby = $request->sort_by ?? 'latest';
        $search = $request->search ?? '';

        $products = Product::where('name','like','%' . $search . '%' );

        $products = $this->filter($products, $request);

        $products = $this->sortAndPagination($products,$sortby,$perpage);
        return view('front.shop.index', compact('categories','products','brands'));
    }

    public function category($categoryName, Request $request){
        //get category
        $categories = ProductCategoty::all();
        $brands =Brand::all();
        $perpage = $request->show ?? 12;
        $sortby = $request->sort_by ?? 'latest';

        //get product
        $products = ProductCategoty::where('category_name', $categoryName)->first()->products->toQuery();

        $products = $this->filter($products, $request);

        $products = $this->sortAndPagination($products,$sortby,$perpage);

        return view('front.shop.index',compact('categories','products','brands'));
    }
    public  function  sortAndPagination($products,$sortby,$perpage){
        switch ($sortby)
        {
            case 'latest':
                $products = $products->orderByDesc('id');
                break;
            case 'oldest':
                $products = $products->orderBy('id');
                break;
            case 'price_ascending':
                $products = $products->orderBy('price');
                break;
            case 'price_descending':
                $products = $products->orderByDesc('price');
                break;
            case 'name_ascending':
                $products = $products->orderBy('name');
                break;
            case 'name_descending':
                $products = $products->orderByDesc('name');
                break;
            default:
                $products = $products->orderBy('id');

        }

        $products = $products->paginate($perpage);
        $products->appends(['sort_by' => $sortby,'show' => $perpage]);
        return $products;
    }

    public function filter($products, Request $request)
    {
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id',$brand_ids ): $products;
        return $products;
    }


}

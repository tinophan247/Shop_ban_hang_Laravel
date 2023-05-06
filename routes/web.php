<?php
use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Front\HomeController::class,'index']);
Route::get('/about_us',[Front\HomeController::class,'about_us']);


Route::get('/shop/product/{id}',[Front\ShopController::class,'show']);

Route::prefix('shop')->group(function (){
    Route::get('/product/{id}', [Front\ShopController::class,'show']);
    Route::post('/product/{id}', [Front\ShopController::class,'postComment']);
    Route::get('/',[Front\ShopController::class,'index']);
    Route::get('/{categoryName}',[Front\ShopController::class,'category']);
});


Route::prefix('cart')->group(function (){
    Route::get('add/{id}',[Front\CartController::class,'add']);
    Route::get('/',[Front\CartController::class,'index']);
    Route::get('delete/{rowId}',[Front\CartController::class,'delete']);
    Route::get('/update',[Front\CartController::class,'update']);
});

//blog
Route::get('blog_index',[Controllers\Blog::class,'blog_index']);

//checkout
Route::prefix('checkout')->group(function (){
    Route::get('/',[Front\CheckOutController::class,'index']);
    Route::post('/',[Front\CheckOutController::class,'addOrder']);
    Route::post('/vnPayCheck',[Front\CheckOutController::class,'vnPayCheck']);
    Route::get('/result',[Front\CheckOutController::class,'result']);
});
Route::get('/login_checkout',[Front\CheckOutController::class,'login_checkout']);
Route::get('/sign_up_checkout',[Front\CheckOutController::class,'sign_up_checkout']);
Route::post('/add_customer',[Front\CheckOutController::class,'add_customer']);
Route::get('/logout_checkout',[Front\CheckOutController::class,'logout_checkout']);
Route::post('/login_customer',[Front\CheckOutController::class,'login_customer']);
Route::get('/vnpay_checkout',[Front\CheckOutController::class,'vnpay_checkout']);



//Backend
Route::get('/admin',[Controllers\AdminController::class,'index']);
Route::get('/dashboard',[Controllers\AdminController::class,'show_dashboard']);
Route::post('/admin-dashboard',[Controllers\AdminController::class,'dashboard']);
Route::get('/logout',[Controllers\AdminController::class,'logout']);

//Category
Route::get('/add-category-product',[Controllers\CategoryProduct::class,'add_category_product']);
Route::get('/edit-category-product/{category_product_id}',[Controllers\CategoryProduct::class,'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[Controllers\CategoryProduct::class,'delete_category_product']);
Route::get('/all-category-product',[Controllers\CategoryProduct::class,'all_category_product']);

Route::get('/unactive-category-product/{category_product_id}',[Controllers\CategoryProduct::class,'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[Controllers\CategoryProduct::class,'active_category_product']);

Route::post('/save-category-product',[Controllers\CategoryProduct::class,'save_category_product']);
Route::post('/update-category-product/{category_product_id}',[Controllers\CategoryProduct::class,'update_category_product']);

//Brand
Route::get('/add-brand-product',[Controllers\BrandProduct::class,'add_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}',[Controllers\BrandProduct::class,'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[Controllers\BrandProduct::class,'delete_brand_product']);
Route::get('/all-brand-product',[Controllers\BrandProduct::class,'all_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}',[Controllers\BrandProduct::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[Controllers\BrandProduct::class,'active_brand_product']);

Route::post('/save-brand-product',[Controllers\BrandProduct::class,'save_brand_product']);
Route::post('/update-brand-product/{brand_product_id}',[Controllers\BrandProduct::class,'update_brand_product']);

//Product
Route::get('/add-product',[Controllers\Products::class,'add_product']);
Route::get('/edit-product/{product_id}',[Controllers\Products::class,'edit_product']);
Route::get('/delete-product/{product_id}',[Controllers\Products::class,'delete_product']);
Route::get('/all-product',[Controllers\Products::class,'all_product']);

Route::get('/unactive-product/{product_id}',[Controllers\Products::class,'unactive_product']);
Route::get('/active-product/{product_id}',[Controllers\Products::class,'active_product']);

Route::post('/save-product',[Controllers\Products::class,'save_product']);
Route::post('/update-product/{product_id}',[Controllers\Products::class,'update_product']);

//Order
Route::get('/manage_order',[Controllers\Order::class,'manage_order']);
Route::get('/view_order/{order_id}',[Front\CheckOutController::class,'view_order']);
Route::get('/delete_order/{order_id}',[Front\CheckOutController::class,'delete_order']);

//User
Route::get('/add-user',[Controllers\User::class,'add_user']);
Route::get('/edit-user/{customer_id}',[Controllers\User::class,'edit_user']);
Route::get('/delete-user/{customer_id}',[Controllers\User::class,'delete_user']);
Route::get('/all-user',[Controllers\User::class,'all_user']);

Route::post('/save-user',[Controllers\User::class,'save_user']);
Route::post('/update-user/{customer_id}',[Controllers\User::class,'update_user']);

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cart;

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
//frondend

Route::get('/', 'homecontroller@index');

Route::get('/trang-chu', 'homecontroller@index');

//danhmucsanpham

Route::get('/danh-muc-san-pham{category_id}', 'CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham{brand_id}', 'BrandProduct@show_Brand');
Route::get('/chi-tiet-san-pham{product_id}', 'ProductController@details_product');
//giohang
//Route::match(['get','post'],'/save-cart','CartController@save_cart');
//Route::get('/show-cart','CartController@show_cart');

Route::Post('/login-customer', 'CheckoutController@login_customer');
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::Post('/add-customer', 'CheckoutController@add_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::Post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/order-place', 'CheckoutController@order_place');


Route::prefix('/gio-hang')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::match(['get', 'post'], '/them/{id}', [CartController::class, 'add_cart'])->name('add');
});

Route::prefix('thanh-toan')->name('checkout.')->group(function () {
    Route::prefix('vnpay')->name('vnpay.')->group(function () {
        Route::get('/', [CheckoutController::class, 'createVNPay'])->name('create');
        Route::get('/callback', [CheckoutController::class, 'callbackVNPay'])->name('callback');
    });
});




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
    Route::match(['get', 'post'], '/dang-ky', [AuthController::class, 'register'])->name('register');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('home');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//category
        Route::get('/add-category-product', 'CategoryProduct@add_category_product');
        Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
        Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');
        Route::get('/all-category-product', 'CategoryProduct@all_category_product');
        Route::match(['get', 'post'], '/save-category-product', 'CategoryProduct@save_category_product');
        Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');

//brand
        Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
        Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@edit_brand_product');
        Route::get('/delete-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');
        Route::get('/all-brand-product', 'BrandProduct@all_brand_product');
        Route::match(['get', 'post'], '/save-brand-product', 'BrandProduct@save_brand_product');
        Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@update_brand_product');
//sanpham
        Route::get('/add-product', 'ProductController@add_product');
        Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
        Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
        Route::get('/all-product', 'ProductController@all_product');
        Route::match(['get', 'post'], '/save-product', 'ProductController@save_product');
        Route::post('/update-product/{product_id}', 'ProductController@update_product');

//order
        Route::get('/manage-order', 'CheckoutController@manage_order');
        Route::get('/view-order/{customer_id}','CheckoutController@view_order');


    });
});



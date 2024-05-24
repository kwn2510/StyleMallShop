<?php

use Illuminate\Support\Facades\Route;

//frontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@search');

//danh mục sản phẩm trang chủ
Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\ProductController@details_product');
Route::get('/comment', 'App\Http\Controllers\ProductController@list_comment');
Route::post('/load-comment', 'App\Http\Controllers\ProductController@load_comment');
Route::post('/send-comment', 'App\Http\Controllers\ProductController@send_comment');
Route::post('/allow-comment', 'App\Http\Controllers\ProductController@allow_comment');
Route::post('/reply-comment', 'App\Http\Controllers\ProductController@reply_comment');


//backend
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');


//category product
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');

Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');

// product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');


//cart
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');

Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');
Route::post('/add-cart-ajax','App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/gio-hang','App\Http\Controllers\CartController@gio_hang');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');
Route::get('/del-product/{session_id}','App\Http\Controllers\CartController@delete_product');
Route::get('/del-all-product','App\Http\Controllers\CartController@delete_all_product');

//checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer');

Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
// Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer');

Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@addCustomer');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');

Route::get('/payment','App\Http\Controllers\CheckoutController@payment');

Route::post('/order-place','App\Http\Controllers\CheckoutController@order_place');

// order-admin
Route::get('/manage-order','App\Http\Controllers\CheckoutController@manage_order');
Route::get('/view-order/{orderId}','App\Http\Controllers\CheckoutController@view_order');


//Delivery

Route::get('/add-delivery','App\Http\Controllers\DeliveryController@add_delivery');
Route::get('/all-delivery', 'App\Http\Controllers\DeliveryController@all_delivery');
Route::get('/edit-delivery/{fee_id}', 'App\Http\Controllers\DeliveryController@edit_delivery');
Route::get('/delete-delivery/{fee_id}', 'App\Http\Controllers\DeliveryController@delete_delivery');


Route::post('/save-delivery','App\Http\Controllers\DeliveryController@save_delivery');
Route::post('/update-delivery','App\Http\Controllers\DeliveryController@update_delivery');

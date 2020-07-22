<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'PageController@getIndex')->name('getIndex');

Route::get('/products', 'ProductController@getProducts')->name('getProducts');
Route::get('/products/{id}', 'ProductController@getProduct')->name('getProduct');

Route::get('/orders', 'OrderController@getOrders')->name('getOrders')->middleware('auth');
Route::post('/cart/order/save', 'OrderController@saveOrder')->name('saveOrder')->middleware('auth');

Route::get('/cart', 'CartController@getCart')->name('getCart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('addProductToCart');
Route::get('/cart/increase/{id}', 'CartController@increaseCart')->name('increaseCart');
Route::get('/cart/decrease/{id}', 'CartController@decreaseCart')->name('decreaseCart');
Route::get('/cart/remove/{id}', 'CartController@removeProduct')->name('removeProduct');
Route::get('/cart-checkout', 'CartController@getCheckout')->name('getCheckout')->middleware('auth');

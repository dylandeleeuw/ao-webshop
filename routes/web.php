<?php

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

Route::get('/', function () {
    return redirect('/categories');
});

Auth::routes();

Route::get('categories', 'CategoryController@index')->name('category');
Route::get('category/{id}', 'CategoryController@ProductsFromCategory');
Route::get('product/{id}', 'productController@index');
Route::get('cart', 'ShoppingCartController@index');
Route::get('order', 'OrderController@index');
Route::post('orderline', 'OrderlineController@index');
Route::post('cart/add', 'ShoppingCartController@add');
Route::post('cart/edit', 'ShoppingCartController@edit');
Route::post('cart/delete', 'ShoppingCartController@delete');
Route::post('order', 'OrderController@createOrder');

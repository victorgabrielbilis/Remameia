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
    return view('index');
});

Route::get('/admin', function () {
    return view('permissions.admin');
});

Route::get('/log', function () {
    return view('permissions.log');
});

Route::get('/entregador', function () {
    return view('permissions.entregador');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/product', function () {
    return view('shop.productDetail');
});

Route::get('/cart', function () {
    return view('cart.shop_cart');
});

Route::get('/payment', function () {
    return view('cart.checkout1');
});
Route::get('/confirmation', function () {
    return view('cart.checkout2');
});
Route::get('/completed', function () {
    return view('cart.checkout3');
});

//Deliver
Route::get('/deliver', function () {
    return view('deliver.index');
});
Route::get('/deliver/firststep', function () {
    return view('deliver.prepare');
});
Route::get('/deliver/secondstep', function () {
    return view('deliver.wait');
});
Route::get('/deliver/successful', function () {
    return view('deliver.sucessful');
});
Route::get('/deliver/problem', function () {
    return view('deliver.problem');
});

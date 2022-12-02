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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/error', function () {
    return view('404');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/adopt', function () {
    return view('adopt');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/singlep', function () {
    return view('singlep');
});
Route::get('/singlep', function () {
    return view('singlep');
});
Route::get('/singleadopt', function () {
    return view('singleadopt');
});

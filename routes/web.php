<?php

use App\Http\Controllers\CartController;
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
use App\Http\Controllers\DonationController;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\singleController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get(
    '/delete/{id}',
    [CartController::class, 'delete']

);

Route::get(
    '/update-cart/{id}/{quantity}',
    [CartController::class, 'update']

);

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    $p = Product::all();
    return view('admin', ['p' => $p]);
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
Route::get('/cart',   [CartController::class, 'index']);
Route::post('/add',   [CartController::class, 'store']);
Route::get('/checkout', [CartController::class, 'checkout']);
Route::get('/adopt', function () {
    return view('adopt');
});
Route::get('/profile', [CustomAuthController::class, 'profile']);
Route::get('/shop', [ProductController::class, 'index']);

Route::get('/singlep/{id}', [singleController::class, 'index']);

Route::get('/singleadopt', function () {
    return view('singleadopt');
});
// visa

Route::get('/donate/{id}',  [DonationController::class, 'show']);

Route::post('/donate/details', [DonationController::class, 'store']);

Route::get('/donateshow',  [DonationController::class, 'showWithGet']);

<?php

use App\Models\bill;
use App\Models\cart;
use App\Models\Orders;

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
use App\Models\Product;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\singleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CustomAuthController;
use App\Models\Adopt;

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
    $p = Adopt::all();

    return view('index', ['p' => $p]);
});
route::post('/delete/{id}', [AdminController::class, 'destroy']);

// admin
Route::get('/dashboard', function () {
    $p = Product::all();
    $b = Orders::all();
    $c = cart::all();
    return view('admin', ['p' => $p, 'b' => $b, 'c' => $c]);
})->middleware('auth');

Route::post('/addproduct', [AdminController::class, 'addProduct']);
Route::post('/addpet', [AdminController::class, 'addPet']);

Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('Contact');
});
Route::get('/error', function () {
    return view('404');
});
Route::get('/cart',   [CartController::class, 'index'])->middleware('auth');
Route::post('/add',   [CartController::class, 'store'])->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkout'])->middleware('auth');
Route::post('/place', [CartController::class, 'placeorder'])->middleware('auth');

Route::get('/adopt', function () {
    $pp = Adopt::all();
    return view('adopt', ['ppp' => $pp]);
});
Route::get('/profile', [CustomAuthController::class, 'profile'])->middleware('auth');
Route::get('/shop', [ProductController::class, 'index']);

Route::get('/singlep/{id}', [singleController::class, 'index']);

Route::get('/singleadopt', function () {
    return view('singleadopt');
});
// visa

Route::get('/donate/{id}',  [DonationController::class, 'show'])->middleware('auth');

Route::post('/donate/details', [DonationController::class, 'store']);

Route::get('/donateshow',  [DonationController::class, 'showWithGet']);




Route::POST('/filter', [ProductController::class, 'index']);

Route::get('/search', [ProductController::class, 'searchKeyword']);

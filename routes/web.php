<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductBookingController;


use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('Admin.register');
// });

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('route:clear');
	$exitCode = Artisan::call('view:clear');
    return '<h1>config cache cleared</h1>'; 
});

Route::get('/cache', function() {
	Artisan::call('config:cache');
    Artisan::call('config:clear');
	Artisan::call('route:clear');
	dd('done');
});

Route::get('/',[frontController::class,'frontlayout'])->name('ecommerce');
Route::get('/contact',[frontController::class,'contact'])->name('contact');
Route::get('/offer',[frontController::class,'offer'])->name('offer');
Route::get('/normal',[frontController::class,'delivery'])->name('normal');
Route::get('/product-details/{id}',[frontController::class,'productdetail'])->name('product-details');
Route::get('/cart',[frontController::class,'cart'])->name('cart');
Route::get('/user/login',[frontController::class,'login_new'])->name('login_new');
Route::post('/user/register',[frontController::class,'user_store'])->name('user_store');
Route::post('/user/login',[frontController::class,'loginCheck'])->name('user_login');
Route::get('logout_new', [frontController::class, 'logout_new'])->name('logout_new');


Route::get('/login',[AuthController::class,'index'])->name('login');
Route::get('/register-get',[AuthController::class,'Showregister'])->name('register'); 
Route::post('/register-post',[AuthController::class,'register'])->name('register.post');
Route::post('/login-post',[AuthController::class,'login'])->name('login.post');

Route::group(['middleware' => 'auth'],function(){

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/userlist',[UserController::class,'Userlist'])->name('userlist');
	
Route::get('/manage_account',[AuthController::class,'ChangePassword'])->name('chagepassword');
Route::post('/manage_account',[AuthController::class,'ResetPassword'])->name('chagepassword.post'); 

Route::get('/add-customer',[UserController::class,'AddCustomer'])->name('add-customer');
Route::post('/add-customer',[UserController::class,'AddCustomerPost'])->name('add-customer.post');

Route::get('/edit-customer/{id}',[UserController::class,'showUser'])->name('edit-customer');
Route::post('/edit-customer/{id}',[UserController::class,'UpdateCustomer'])->name('edit-customer-post');

Route::get('/delete-customer/{id}',[UserController::class,'deleteCustomer'])->name('delete-customer-post');

Route::get('/merchantlist',[MerchantController::class,'MerchantList'])->name('merchantlist-post');
Route::get('/add-merchant',[MerchantController::class,'addmerchant'])->name('add-merchant');
Route::post('/add-merchant',[MerchantController::class,'AddMerchantPost'])->name('add-merchant.post');
Route::get('/edit-merchant',[MerchantController::class,'showMerchant'])->name('edit-merchant');

Route::get('logout', [AuthController::class, 'logout'])->name('Userlogout');
Route::get('/categories',[CategoryController::class,'index'])->name('category');
Route::get('/add-category',[CategoryController::class,'create'])->name('add-category');
Route::post('/add-category',[CategoryController::class,'store'])->name('add-category-post');

Route::get('/edit-category/{id}',[CategoryController::class,'show'])->name('edit-category');
Route::post('/edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category-post');

Route::post('/delete-category',[CategoryController::class,'destroy'])->name('delete-category-post');

Route::get('/productlist',[ProductController::class,'index'])->name('product_list');
Route::get('/add_product',[ProductController::class,'create'])->name('add_product');
Route::post('/add_product',[ProductController::class,'store'])->name('add_product_post');
Route::get('/edit-product/{id}',[ProductController::class,'show'])->name('edit-product');
Route::post('/edit-product/{id}',[ProductController::class,'edit'])->name('edit-product-post');
Route::post('/delete-product',[ProductController::class,'destroy'])->name('delete-product-post');
Route::get('/product-details-get/{id}',[ProductController::class,'extraDetails'])->name('product-details-get');
Route::post('/product-detail-get/{id}',[ProductController::class,'extraDetailsPost'])->name('product-details-post');

Route::post('/add-to-cart',[CartController::class,'store'])->name('add-to-cart-post');
Route::get('/delete-cart',[CartController::class,'destroy'])->name('delete-cart-post');
Route::post('/product_booking',[ProductBookingController::class,'store'])->name('product_booking');
Route::get('/product/booking_fail',[ProductBookingController::class,'BookingFaill'])->name('product.booking.fail');
Route::get('/product/booking_success',[ProductBookingController::class,'BookingSuccess'])->name('product.booking.success');
Route::get('/product_booking_list',[ProductBookingController::class,'index'])->name('product_booking_list');

Route::post('/delete-book-product',[ProductBookingController::class,'destroy'])->name('delete-product-book');
Route::post('/change-book-status',[ProductBookingController::class,'ChangeBookStatus'])->name('change.book.status');



});





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


Route::get('/', function () {
    return view('welcome');
});  */

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'index'])->name('home');

Route::get('/product/{id}/{slug}',[\App\Http\Controllers\Frontend\HomeController::class,'productShow'])->name('product.show');

Route::get('registration',[\App\Http\Controllers\Frontend\UserController::class,'registration'])->name('registration');

Route::post('registration',[\App\Http\Controllers\Frontend\UserController::class,'doRegistration']);

Route::get('login',[\App\Http\Controllers\Frontend\UserController::class,'login'])->name('login');

Route::post('login',[\App\Http\Controllers\Frontend\UserController::class,'doLogin']);

Route::get('logout',[\App\Http\Controllers\Frontend\UserController::class,'logout'])->name('logout');

Route::get('profile',[\App\Http\Controllers\Frontend\UserController::class,'profile'])->name('profile');

Route::post('profile',[\App\Http\Controllers\Frontend\UserController::class,'updateProfile']);


Route::get('/add-to-cart/{id}',[\App\Http\Controllers\Frontend\CartController::class,'cart'])->name('add.to.cart');

Route::get('/cart',[\App\Http\Controllers\Frontend\CartController::class,'showcart'])->name('cart');

Route::get('admin/login',[App\Http\Controllers\Backend\LoginController::class,'loginform'])->name('admin.login');

Route::post('admin/login',[App\Http\Controllers\Backend\LoginController::class,'login']);

Route::middleware(['auth'])->prefix('admin')->group(function(){


Route::get('/',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('dashboard');

 Route::get('logout',[\App\Http\Controllers\Backend\LoginController::class,'logout'])->name('admin.logout');


Route::get('/products',[App\Http\Controllers\Backend\ProductController::class,'index'])->name('admin.product');

Route::get('products/create',[App\Http\Controllers\Backend\ProductController::class,'create'])->name('admin.product.create');

Route::post('products/create',[App\Http\Controllers\Backend\ProductController::class,'store']);

Route::get('products/edit/{id}',[App\Http\Controllers\Backend\ProductController::class,'edit'])->name('admin.product.edit');

Route::post('products/edit/{id}',[App\Http\Controllers\Backend\ProductController::class,'update']);

Route::get('products/delete/{id}',[App\Http\Controllers\Backend\ProductController::class,'delete'])->name('admin.product.delete');

Route::get('customers',[App\Http\Controllers\Backend\CustomerController:: class,'index'])->name('admin.customer');

Route::get('customers/edit/{id}',[App\Http\Controllers\Backend\CustomerController:: class,'edit'])->name('admin.customer.edit');

Route::post('customers/edit/{id}',[App\Http\Controllers\Backend\CustomerController:: class,'update']);

Route::get('customers/delete/{id}',[App\Http\Controllers\Backend\CustomerController::class,'delete'])->name('admin.customer.delete');

Route::get('/orders',[App\Http\Controllers\Backend\OrderController::class,'index'])->name('admin.order');

Route::get('orders/edit/{id}',[App\Http\Controllers\Backend\OrderController:: class,'edit'])->name('admin.order.edit');

Route::post('orders/edit/{id}',[App\Http\Controllers\Backend\OrderController::class,'update']);

Route::get('orders/delete/{id}',[App\Http\Controllers\Backend\OrderController::class,'delete'])->name('admin.order.delete');

Route::get('/reports',[App\Http\Controllers\Backend\ReportController::class,'index'])->name('admin.report');

Route::get('reports/edit/{id}',[App\Http\Controllers\Backend\ReportController:: class,'edit'])->name('admin.report.edit');

Route::post('reports/edit/{id}',[App\Http\Controllers\Backend\ReportController::class,'update']);

Route::get('reports/delete/{id}',[App\Http\Controllers\Backend\ReportController::class,'delete'])->name('admin.report.delete');

});



	






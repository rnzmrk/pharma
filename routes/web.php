<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website');
})->name('web');
 

/* AUTH */

Route::view('auth/login', 'auth.login')->name('login');
Route::post('auth/login', [LoginController::class, 'store'])->name('login.store');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

Route::view('auth/register', 'auth.register')->name('register');
Route::post('auth/register', [RegisterController::class, 'store'])->name('register.store');

/* CUSTOMER VIEW  */

Route::view('/customer/home', 'customer.customer-home')->name('customer.home');
Route::view('/customer/products', 'customer.customer-home')->name('customer.products');
Route::view('/customer/order', 'customer.customer-order')->name('customer.order');
Route::view('/customer/history', 'customer.customer-history')->name('customer.history');
Route::view('/customer/cart', 'customer.customer-cart')->name('customer.cart');
Route::view('/customer/profile', 'customer.customer-profile')->name('customer.profile');
Route::view('/customer/checkout', 'customer.customer-checkout')->name('customer.checkout');

/* PHARMA VIEW */


Route::view('/pharma/home', 'pharma.pharma-home')->name('pharma.home');
Route::view('/pharma/history', 'pharma.pharma-history')->name('pharma.history');
Route::view('/pharma/inventory', 'pharma.pharma-inventory')->name('pharma.inventory');
Route::view('/pharma/order', 'pharma.pharma-order')->name('pharma.order');
Route::view('/pharma/profile', 'pharma.pharma-profile')->name('pharma.profile');

/* ADMIN VIEW */


Route::view('/admin/home', 'admin.admin-home')->name('admin.home');
Route::view('/admin/history', 'admin.admin-history')->name('admin.history');
Route::view('/admin/inventory', 'admin.admin-inventory')->name('admin.inventory');
Route::view('/admin/order', 'admin.admin-order')->name('admin.order');
Route::view('/admin/users', 'admin.admin-users')->name('admin.users');
Route::view('/admin/profile', 'admin.admin-profile')->name('admin.profile');


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website');
});

Route::view('/customer', 'layouts.customer');

/* AUTH */

Route::view('auth/login', 'auth.login');
Route::view('auth/register', 'auth.register');

/* CUSTOMER VIEW  */

Route::view('/customer/home', 'customer.customer-home');
Route::view('/customer/order', 'customer.customer-order');
Route::view('/customer/history', 'customer.customer-history');
Route::view('/customer/cart', 'customer.customer-cart');
Route::view('/customer/profile', 'customer.customer-profile');
Route::view('/customer/checkout', 'customer.customer-checkout');

/* PHARMA VIEW */

Route::view('/pharma', 'layouts.pharmacist');
Route::view('/pharma/home', 'pharma.pharma-home');
Route::view('/pharma/history', 'pharma.pharma-history');
Route::view('/pharma/inventory', 'pharma.pharma-inventory');
Route::view('/pharma/order', 'pharma.pharma-order');
Route::view('/pharma/profile', 'pharma.pharma-profile');

/* ADMIN VIEW */

Route::view('/admin', 'layouts.admin');
Route::view('/admin/home', 'admin.admin-home');
Route::view('/admin/history', 'admin.admin-history');
Route::view('/admin/inventory', 'admin.admin-inventory');
Route::view('/admin/order', 'admin.admin-order');
Route::view('/admin/users', 'admin.admin-users');
Route::view('/admin/profile', 'admin.admin-profile');


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website');
});

Route::view('/customer', 'layouts.customer');


/* CUSTOMER VIEW  */

Route::view('/customer/home', 'customer.customer-home');
Route::view('/customer/order', 'customer.customer-order');
Route::view('/customer/history', 'customer.customer-history');
Route::view('/customer/cart', 'customer.customer-cart');
Route::view('/customer/profile', 'customer.customer-profile');


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/finish', function () {
    return view('finish');
});

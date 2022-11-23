<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/product-preview', function () {
    return view('product-preview');
});

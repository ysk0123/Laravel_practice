<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', function(){
    return view('front.page.top');
});

Route::get('/about', function(){
    return view('front.page.about');
});
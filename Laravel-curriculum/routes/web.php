<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', [TopController::class, 'top'])->name('top');
Route::get('/about', [AboutController::class, 'about'])->name('about');

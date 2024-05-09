<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);

Route::get('/', [TopController::class, 'top'])->name('top');
Route::get('/about', [AboutController::class, 'about'])->name('about');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

Route::get('/', [TopController::class, 'top'])->name('top');

Route::resource('books',BookController::class);
Route::resource('users',UserController::class)->only(['index', 'show', 'destroy']);
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::put('/books/{book}', [BookController::class,'update'])->name('books.update');
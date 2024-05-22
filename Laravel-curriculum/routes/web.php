<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

Route::resource('users',UserController::class);
Route::get('/', [TopController::class, 'top'])->name('top');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/books',[BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}',[BookController::class, 'show'])->name('books.show');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
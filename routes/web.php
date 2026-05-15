<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/user/{name}', [PageController::class, 'user'])->name('user');

Route::get('/product/{id}', [PageController::class, 'product'])->name('product');

Route::get('/city/{name}', [PageController::class, 'city'])->name('city');


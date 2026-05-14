<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/user/{name}', function ($name) {
    return view('user', [
        'name' => $name,
    ]);
})->name('user');

Route::get('/product/{id}', function ($id) {
    return view('product', [
        'id' => $id,
    ]);
})->name('product');

Route::get('/city/{name}', function ($name) {
    return view('city', [
        'name' => $name,
    ]);
})->name('city');


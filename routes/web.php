<?php

use Illuminate\Support\Facades\Route;

// Route utama untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman about
Route::get('/about', function () {
    return "Ini adalah halaman About";
});

// Route dengan parameter nama user
Route::get('/user/{name}', function ($name) {
    return "Halo, $name!";
});

// Route untuk menampilkan produk berdasarkan ID
Route::get('/product/{id}', function ($id) {
    return "Produk dengan ID: $id";
});

// Route untuk menampilkan informasi kota
Route::get('/city/{name}', function ($name) {
    return "Kota: $name";
});

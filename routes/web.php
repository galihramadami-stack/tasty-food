<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tasty Food Project
|--------------------------------------------------------------------------
*/

// Halaman Utama (Root)
Route::get('/', function () {
    return view('welcome');
})->name('index');

// Halaman Beranda / Home
Route::get('/home', function () {
    return view('home');
})->name('home'); // Ini yang tadi menyebabkan error karena belum didefinisikan

// Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Halaman Berita
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Halaman Galeri
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
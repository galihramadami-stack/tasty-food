<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes - Tasty Food
|--------------------------------------------------------------------------
*/

// --- Frontend Routes (Public) ---
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::view('/home', 'home')->name('home');
Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/berita', 'berita')->name('berita');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/kontak', 'kontak')->name('kontak');

// --- Authentication ---
Route::middleware('guest')->group(function () {
    // Menampilkan Form Login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    // Memproses Data Login
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

// Proses Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- Admin Panel (Protected) ---
// Ditambahkan middleware 'auth' agar hanya yang sudah login yang bisa masuk ke admin
Route::prefix('admin')->middleware('auth')->group(function () {
    
    // Dashboard Admin
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD Food
    Route::resource('food', FoodController::class);

    // Halaman Order
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/order/{id}', [OrderController::class, 'show'])->name('admin.order.show');
    Route::put('/order/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.order.update-status');

    // Halaman Pelanggan
    Route::get('/customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customer.index');

    // Halaman Laporan
    Route::get('/report', [\App\Http\Controllers\ReportController::class, 'index'])->name('admin.report.index');

    // Halaman Pengaturan
    Route::get('/setting', [\App\Http\Controllers\SettingController::class, 'index'])->name('admin.setting.index');
    Route::put('/setting', [\App\Http\Controllers\SettingController::class, 'update'])->name('admin.setting.update');
});
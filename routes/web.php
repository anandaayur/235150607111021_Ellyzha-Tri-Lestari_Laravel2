<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Route untuk halaman utama
Route::get('/', [BlogController::class, 'index'])->name('home');

// Route untuk menampilkan semua blog (daftar blog)
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

// Route untuk halaman tambah blog
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');

// Route untuk menyimpan blog baru
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

Route::get('/dashboard', function () {
    return view('dashboard'); // pastikan kamu punya view 'dashboard.blade.php'
})->name('dashboard');

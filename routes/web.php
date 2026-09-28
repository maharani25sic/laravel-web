<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

// Halaman Utama & Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// Route Kampus & Mahasiswa
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route About
Route::get('/about', function () {
    return view('halaman-about');
});

// Route Matakuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode}', [MatakuliahController::class, 'show']);

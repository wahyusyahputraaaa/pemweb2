<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/salam', function () {
    return "Selamat Datang Wahyu Di Laravel";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});


// praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index']); 
Route::get('/contact', [AdminController::class, 'index']); 
Route::get('/about', [AdminController::class, 'index']); 

// praktikum Laravel 3
Route::get('/dashboard/kelurahan',[KelurahanController::class, 'index']);
Route::get('/dashboard/pasien',[PasienController::class, 'index']);
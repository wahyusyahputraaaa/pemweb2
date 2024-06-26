<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Models\Pasien;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index']); 
    });
    Route::prefix('kelurahan')->group(function () {
        Route::get('/',[KelurahanController::class, 'index']);
        Route::get('/create',[KelurahanController::class, 'create']);
        Route::post('/store',[KelurahanController::class, 'store']);
        Route::get('/show/{id}',[KelurahanController::class, 'show']);
        Route::get('/edit/{id}',[KelurahanController::class, 'edit']);
        Route::put('/update/{id}',[KelurahanController::class, 'update']);
        Route::delete('/destroy/{id}',[KelurahanController::class, 'destroy']);

    });   

        Route::middleware('admin')->prefix('pasien')->group(function () {
        Route::get('/',[PasienController::class, 'index']);
        Route::get('/create',[PasienController::class, 'create']);
        Route::post('/store',[PasienController::class, 'store']);
        Route::get('/show/{id}',[PasienController::class, 'show']);
        Route::get('/edit/{id}',[pasienController::class, 'edit']);
        Route::put('/update/{id}',[pasienController::class, 'update']);
        Route::delete('/destroy/{id}',[pasienController::class, 'destroy']);
    });

});

require __DIR__.'/auth.php';

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
//Route::get('/dashboard', [AdminController::class, 'index']); 
Route::get('/contact', [AdminController::class, 'index']); 
Route::get('/about', [AdminController::class, 'index']); 

// praktikum Laravel 3
//Route::get('/dashboard/kelurahan',[KelurahanController::class, 'index']);
//Route::get('/dashboard/pasien',[PasienController::class, 'index']);

// praktikum Laravel 4
//Route::get('/dashboard/kelurahan/create',[KelurahanController::class, 'create']);
//Route::post('/dashboard/kelurahan/store',[KelurahanController::class, 'store']);
//Route::get('/dashboard/kelurahan/show/{id}',[KelurahanController::class, 'show']);
//Route::get('/dashboard/pasien/create',[PasienController::class, 'create']);
//Route::post('/dashboard/pasien/store',[PasienController::class, 'store']);
//Route::get('/dashboard/pasien/show/{id}',[PasienController::class, 'show']);

// praktikum Laravel 5
//Route::get('/dashboard/kelurahan/edit/{id}',[KelurahanController::class, 'edit']);
//Route::put('/dashboard/kelurahan/update/{id}',[KelurahanController::class, 'update']);
//Route::delete('/dashboard/kelurahan/destroy/{id}',[KelurahanController::class, 'destroy']);
//Route::get('/dashboard/pasien/edit/{id}',[pasienController::class, 'edit']);
//Route::put('/dashboard/pasien/update/{id}',[pasienController::class, 'update']);
//Route::delete('/dashboard/pasien/destroy/{id}',[pasienController::class, 'destroy']);
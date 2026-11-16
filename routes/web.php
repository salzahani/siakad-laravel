<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DashboardController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', [AuthController::class, 'login']);
Route::get('/hallo', function() {
    return 'Hallo, Selamat Datang di Tutorial Laravel';
});
Route::get('/myhome', [HomeController::class, 'myhome']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdministrator'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });
});

Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::get('/nilai', fn () => view('nilai'));
    Route::resource('mata-kuliah', MataKuliahController::class)->only(['index']);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('mata-kuliah', MataKuliahController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
});

Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('prodi', ProdiController::class)->only(['index']);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('prodi', ProdiController::class)->except(['index']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/profil', function () {
    return view('profil');
})->middleware('auth');

Route::middleware(['auth', 'role:1,2'])->get('/nilai', fn () => view('nilai'));

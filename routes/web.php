<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VerifikasiPesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Home
Route::get('/', [HomeController::class, 'index'])->name('HomePage');
Route::get('/infoBerita', [HomeController::class, 'bindex']);

// Login & Register
Route::get('/register', [AuthController::class, 'rindex']);
Route::post('/register', [AuthController::class, 'rstore']);
Route::get('/login', [AuthController::class, 'lindex'])->name('login');
Route::post('/login',[AuthController::class,'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Admin
Route::resource('/admin', AdminController::class);
Route::resource('/pengelola', PengelolaController::class);
Route::resource('/user', UserController::class);

// Pengelola
Route::resource('/pengelola', PengelolaController::class);
Route::resource('/wisata', WisataController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/promosi', PromosiController::class);
Route::resource('/category', CategoryController::class);

// User
Route::get('profile', PenggunaController::class, '');

// Route::get('/pengelola/wisata/{id}/edit', [WisataController::class, 'edit']);


// Route::get('/pengelola/wisata/{id}/delete', [WisataController::class, 'destroy']);

Route::post('/wisata', [WisataController::class, 'store'])->name('wisata');
Route::put('/pengelola/wisata/{id}',[WisataController::class, 'update'])->name('wisata');


Route::get('/detailberita', function () {
    return view('frontend/pages/detailberita');
});

// coba Profil user
Route::get('/profiluser', function () {
    return view('frontend/profil/user');
});
Route::get('/transaksi', function () {
    return view('frontend/transaksi');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;



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

Route::get('/', function () {
    return view('backend/pages/login');
});

// Admin
Route::resource('/admin', AdminController::class);
Route::resource('/pengelola', PengelolaController::class);
Route::resource('/user', UserController::class);

Route::get('/register', [AuthController::class, 'rindex']);
Route::post('/register', [AuthController::class, 'rstore']);

Route::post('/login',[AuthController::class,'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Pengelola
Route::resource('/pengelola', PengelolaController::class);
Route::resource('/wisata', WisataController::class);
Route::resource('/berita', BeritaController::class);

// Route::get('/pengelola/wisata/{id}/edit', [WisataController::class, 'edit']);


// Route::get('/pengelola/wisata/{id}/delete', [WisataController::class, 'destroy']);

Route::post('/wisata', [WisataController::class, 'store'])->name('wisata');


Route::put('/pengelola/wisata/{id}',[WisataController::class, 'update'])->name('wisata');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Category

Route::resource('/category', CategoryController::class);

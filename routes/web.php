<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardProjekController;
use App\Http\Controllers\DashboardUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/katalog/{slug}', [KatalogController::class, 'show'])->name('katalog.show');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::resource('/kategori', DashboardKategoriController::class)->middleware('auth');
    Route::resource('/user', DashboardUserController::class)->middleware('auth');
    Route::post('/user/reset-password', [DashboardUserController::class, 'resetPasswordAdmin'])->name('user.reset');
    Route::resource('/produk', DashboardProdukController::class)->middleware('auth');
    Route::resource('/projek', DashboardProjekController::class)->middleware('auth');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});


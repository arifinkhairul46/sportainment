<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('index');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/order', function () {
    return view('order');
});



//login google
Route::controller(GoogleController::class)->group(function () {
    Route::get('/auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('/auth/google/callback', 'handleGoogleCallback');
});

Route::prefix('admin')->group(function () {
    // Route::get('absensi', [DashboardController::class, 'index'])->('dashboard.absensi');
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard.absensi');
    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
});
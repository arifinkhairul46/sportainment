<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/booking/{id_lapang}/{id_sesi}', [HomeController::class, 'addToCart'])->name('addToCart');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('cart', [HomeController::class, 'checkout'])->name('checkout');
Route::post('cart/remove/{id}', [HomeController::class, 'remove_cart'])->name('remove_cart');

Route::get('diskon', [DiskonController::class, 'show'])->name('diskon.show');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/jadwal' , [OrderController::class, 'get_order_detail_all'])->name('jadwal');
Route::get('/order/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
Route::post('/booking', [OrderController::class, 'store'])->name('booking.store');

Route::get('/profile', function () {
    return view('profile');
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
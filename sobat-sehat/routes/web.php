<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KontributorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;




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

Route::get('/',
[HomeController::class, 'index']);

Auth::routes();

Route::get('/home',
[HomeController::class, 'index']);

// Route::get('/dashboard',
// [DashboardController::class, 'index']);


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route::post('login', function () {[auth]})->name("login.attempt");


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    // Route dashboard
    Route::get('/' , [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/kontributor',
    [KontributorController::class, 'kontributor']);

    Route::get('/jadwal',
    [JadwalController::class, 'jadwal']);

    Route::get('/lokasi',
    [LokasiController::class, 'lokasi']);
});

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

    // Kontributor
    Route::get('/kontributor',
    [KontributorController::class, 'index']);
    Route::get('/kontributor/create',
    [KontributorController::class, 'create']);
    Route::post('/kontributor/store',
    [KontributorController::class, 'store']);
    Route::delete('/kontributor/destroy/{id}',
    [KontributorController::class, 'destroy']);
    // Route::get('/kontributor/edit/{id}',
    // [KontributorController::class, 'edit']);
    // Route::put('/kontributor/update/{id}',
    // [KontributorController::class, 'update']);
    Route::get('/kontributor/show/{id}',
    [KontributorController::class, 'show']);

    // Jadwal
    Route::get('/jadwal',
    [JadwalController::class, 'index']);
    Route::get('/jadwal/create',
    [JadwalController::class, 'create']);
    Route::post('/jadwal/store',
    [JadwalController::class, 'store']);
    Route::delete('/jadwal/destroy/{id}',
    [JadwalController::class, 'destroy']);
    Route::get('/jadwal/edit/{id}',
    [JadwalController::class, 'edit']);
    Route::put('/jadwal/update/{id}',
    [JadwalController::class, 'update']);
    Route::get('/jadwal/show/{id}',
    [JadwalController::class, 'show']);

    // Lokasi
    Route::get('/lokasi',
    [LokasiController::class, 'index']);
    Route::get('/lokasi/create',
    [LokasiController::class, 'create']);
    Route::post('/lokasi/store',
    [LokasiController::class, 'store']);
    Route::delete('/lokasi/destroy/{id}',
    [LokasiController::class, 'destroy']);
    Route::get('/lokasi/edit/{id}',
    [LokasiController::class, 'edit']);
    Route::put('/lokasi/update/{id}',
    [LokasiController::class, 'update']);
    Route::get('/lokasi/show/{id}',
    [LokasiController::class, 'show']);
});

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/home', 
[HomeController::class, 'index']);

// Route::get('/dashboard', 
// [DashboardController::class, 'index']);

Route::get('/dashboard/kontributor', 
[KontributorController::class, 'kontributor']);

Route::get('/dashboard/jadwal', 
[JadwalController::class, 'jadwal']);

Route::get('/dashboard/lokasi', 
[LokasiController::class, 'lokasi']);

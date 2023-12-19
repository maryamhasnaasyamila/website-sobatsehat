<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KontributorController;




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

Route::get('/home', 
[HomeController::class, 'index']);

Route::get('/dashboard', 
[DashboardController::class, 'index']);

Route::get('/dashboard/kontributor', 
[KOntributorController::class, 'kontributor']);

Route::get('/dashboard/jadwal', 
[JadwalController::class, 'jadwal']);

Route::get('/dashboard/lokasi', 
[LokasiController::class, 'lokasi']);

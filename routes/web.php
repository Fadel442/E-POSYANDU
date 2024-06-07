<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan']);
Route::get('/warga/dashboard', [GuestController::class, 'wargaDashboard']);
Route::get('/warga/jadwal', [GuestController::class, 'wargaJadwal']);
Route::get('/warga/detail-jadwal', [GuestController::class, 'wargaDetailJadwal']);

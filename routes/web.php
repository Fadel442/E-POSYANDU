<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\JadwalController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [GuestController::class, 'landingPage'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('warga-login');
Route::post('/dummylogin', [GuestController::class, 'loginWarga'])->name('loginwarga');
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan'])->name('alur-layanan');

//warga

//admin
Route::get('/admin/session', [GuestController::class, 'adminSession']);


Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [GuestController::class, 'adminDashboard'])->name('admin');
    Route::get('/admin/user/baru', [GuestController::class, 'adminInputUser'])->name('user-baru');
    Route::post('/admin/user/baru', [GuestController::class, 'registerWarga'])->name('admin.register');
    Route::get('/admin/vaksin', [VaksinController::class, 'index'])->name('admin-vaksin');
    Route::get('/admin/vaksin/add', [VaksinController::class, 'addVaksin'])->name('addVaksin');
    Route::post('/admin/vaksin/add', [VaksinController::class, 'store'])->name('addV');
    Route::get('/admin/jadwal', [GuestController::class, 'dummyJadwalInput'])->name('jadwal-baru');
    Route::post('/admin/jadwal/baru', [JadwalController::class, 'addJadwal'])->name('add-jadwal');
    // Route::get('/admin/jadwal/baru/lokasi', [GuestController::class, 'dummyLokasi'])->name('lokasi-baru');
});

Route::middleware(['auth', 'roles:user'])->group(function () {
    Route::get('/warga/dashboard', [GuestController::class, 'wargaDashboard'])->name('user');
    Route::get('/warga/jadwal', [GuestController::class, 'wargaJadwal'])->name('warga-jadwal');
    Route::get('/warga/detail-jadwal', [GuestController::class, 'wargaDetailJadwal'])->name('detail-jadwal');
    Route::get('/warga/vaksin', [GuestController::class, 'wargaVaksin'])->name('warga-vaksin');
    Route::get('/warga/pengumuman', [GuestController::class, 'wargaPengumunan'])->name('warga-pengumuman');
});


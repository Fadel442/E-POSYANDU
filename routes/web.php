<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\VaksinController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [GuestController::class, 'landingPage'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('user-login');
Route::post('/login',[GuestController::class, 'loginWarga'])->name('loginwarga');
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan'])->name('alur-layanan');

//warga
Route::get('/warga/dashboard', [GuestController::class, 'wargaDashboard'])->name('warga-dashboard')->middleware(['role:admin|warga']);
Route::get('/warga/jadwal', [GuestController::class, 'wargaJadwal'])->name('warga-jadwal')->middleware(['role:admin|warga']);
Route::get('/warga/detail-jadwal', [GuestController::class, 'wargaDetailJadwal'])->name('detail-jadwal')->middleware(['role:admin|warga']);
Route::get('/warga/vaksin', [GuestController::class, 'wargaVaksin'])->name('warga-vaksin')->middleware(['role:admin|warga']);
Route::get('/warga/pengumuman', [GuestController::class, 'wargaPengumunan'])->name('warga-pengumuman')->middleware(['role:admin|warga']);

//admin
Route::get('/admin/session', [GuestController::class, 'adminSession'])->middleware(['role:admin']);
Route::get('/admin/dashboard', [GuestController::class, 'adminDashboard'])->name('adminDashboard')->middleware(['role:admin']);
Route::get('/admin/user/baru', [GuestController::class, 'adminInputUser'])->name('user-baru')->middleware(['role:admin']);
Route::post('/admin/user/baru',[GuestController::class, 'registerWarga'])->name('admin.register')->middleware(['role:admin']);
Route::get('/admin/vaksin',[VaksinController::class, 'index'])->name('admin-vaksin')->middleware(['role:admin']);
Route::get('/admin/vaksin/add',[VaksinController::class, 'addVaksin'])->name('addVaksin')->middleware(['role:admin']);
Route::post('/admin/vaksin/add',[VaksinController::class, 'store'])->name('addV')->middleware(['role:admin']);
Route::get('/admin/jadwal/baru', [GuestController::class, 'dummyJadwalInput'])->name('jadwal-baru')->middleware(['role:admin']);
Route::post('/admin/jadwal/baru', [JadwalController::class, 'addJadwal'])->name('addjadwal')->middleware(['role:admin']);
Route::get('/admin/jadwal/baru/lokasi', [GuestController::class, 'dummyLokasi'])->name('lokasi-baru')->middleware(['role:admin']);

//dummyroute

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
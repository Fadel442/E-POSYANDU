<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [GuestController::class, 'landingPage'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('user-login');
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan'])->name('alur-layanan');

//warga
Route::get('/warga/dashboard', [GuestController::class, 'wargaDashboard'])->name('warga-dashboard');
Route::get('/warga/jadwal', [GuestController::class, 'wargaJadwal'])->name('warga-jadwal');
Route::get('/warga/detail-jadwal', [GuestController::class, 'wargaDetailJadwal'])->name('detail-jadwal');
Route::get('/warga/vaksin', [GuestController::class, 'wargaVaksin'])->name('warga-vaksin');
Route::get('/warga/pengumuman', [GuestController::class, 'wargaPengumunan'])->name('warga-pengumuman');

//admin
Route::get('/admin/session', [GuestController::class, 'adminSession']);
Route::get('/admin/dashboard', [GuestController::class, 'adminDashboard']);
Route::get('/admin/user/baru', [GuestController::class, 'adminInputUser'])->name('user-baru');

//dummyroute
Route::get('/dummyregister',[GuestController::class, 'viewDummyRegister'])->name('dummyregister');
Route::post('/dummyregister',[GuestController::class, 'registerWarga'])->name('admin.register');
Route::get('/dummylogin',[GuestController::class, 'viewDummyLogin'])->name('dummylogin');
Route::post('/dummylogin',[GuestController::class, 'loginWarga'])->name('loginwarga');
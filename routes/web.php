<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\BumilController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;
use App\Models\Bumil;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [GuestController::class, 'landingPage'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [GuestController::class, 'loginWarga'])->name('loginwarga');
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan'])->name('alur-layanan');


//warga

//admin
Route::get('/admin/session', [GuestController::class, 'adminSession']);


Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin');
    Route::get('/admin/daftar', [AdminController::class, 'adminDaftar'])->name('daftar');
    Route::get('/admin/daftar/bumil', [AdminController::class, 'daftarBumil'])->name('bumil');
    Route::post('/admin/daftar/bumil', [BumilController::class, 'tambahBumil'])->name('tambahbumil');
    Route::delete('/admin/daftar/bumil/{id}',[BumilController::class, 'hapusBumil'])->name('hapusbumil');
    Route::get('/admin/daftar/anak', [AdminController::class, 'daftarAnak'])->name('anak');
    Route::post('/admin/daftar/anak', [AnakController::class, 'tambahAnak'])->name('tambahanak');
    Route::delete('/admin/daftar/anak/{id}',[AnakController::class, 'hapusAnak'])->name('hapusanak');
    Route::get('/admin/daftar/anak/laporan', [AdminController::class, 'laporanAnak'])->name('laporan-anak');
    Route::get('/admin/daftar/bumil/laporan', [AdminController::class, 'laporanBumil'])->name('laporan-bumil');
    Route::get('/admin/master', [AdminController::class, 'adminMaster'])->name('master');
    Route::get('/admin/master/jadwal', [AdminController::class, 'adminJadwal'])->name('jadwal');
    Route::post('/admin/master/jadwal', [JadwalController::class, 'addJadwal'])->name('addjadwal');
    Route::delete('/admin/master/jadwal/{id}',[JadwalController::class, 'hapusJadwal'])->name('hapusjadwal');
    Route::get('/admin/master/vaksin', [AdminController::class, 'adminVaksin'])->name('vaksin');
    Route::post('/admin/master/vaksin', [VaksinController::class, 'tambahVaksin'])->name('tambahvaksin');
    Route::delete('/admin/master/vaksin/{id}',[VaksinController::class, 'hapusVaksin'])->name('hapusvaksin');


    // Route::get('/admin/user/baru', [GuestController::class, 'adminInputUser'])->name('user-baru');
    // Route::post('/admin/user/baru', [GuestController::class, 'registerWarga'])->name('admin.register');
    // Route::get('/admin/vaksin', [VaksinController::class, 'index'])->name('admin-vaksin');
    // Route::get('/admin/vaksin/add', [VaksinController::class, 'addVaksin'])->name('addVaksin');
    // Route::post('/admin/vaksin/add', [VaksinController::class, 'store'])->name('addV');
    // Route::get('/admin/jadwal', [GuestController::class, 'dummyJadwalInput'])->name('jadwal-baru');
    // Route::post('/admin/jadwal/baru', [JadwalController::class, 'addJadwal'])->name('add-jadwal');
    // Route::get('/admin/jadwal/baru/lokasi', [GuestController::class, 'dummyLokasi'])->name('lokasi-baru');
});

Route::middleware(['auth', 'roles:bidan'])->group(function () {
    Route::get('/bidan/dashboard', [BidanController::class, 'bidanDashboard'])->name('bidan');
    Route::get('/bidan/laporan', [BidanController::class, 'bidanLaporan'])->name('data');
    Route::get('/bidan/laporan/bumil', [BidanController::class, 'bidanILBumil'])->name('input-bumil');
    Route::get('/bidan/laporan/anak', [BidanController::class, 'bidanILAnak'])->name('input-anak');
});

Route::middleware(['auth', 'roles:user'])->group(function () {
    Route::get('/warga/dashboard', [UserController::class, 'wargaDashboard'])->name('user');
    Route::get('/warga/jadwal', [UserController::class, 'wargaJadwal'])->name('warga-jadwal');
    Route::get('/warga/riwayat', [UserController::class, 'wargaRiwayat'])->name('warga-riwayat');
    Route::get('/warga/vaksin', [UserController::class, 'wargaVaksin'])->name('warga-vaksin');
});


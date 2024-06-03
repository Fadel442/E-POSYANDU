<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/alur-layanan', [GuestController::class, 'alurLayanan']);

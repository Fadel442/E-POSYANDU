<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function bidanDashboard()
    {
        return view('bidan.bidan-dashboard');
    }
    public function bidanLaporan()
    {
        return view('bidan.bidan-inputLaporan');
    }
    public function bidanILBumil()
    {
        return view('bidan.bidan-input-laporanBumil');
    }
    public function bidanILAnak()
    {
        return view('bidan.bidan-input-laporanAnak');
    }
}

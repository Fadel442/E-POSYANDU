<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function alurLayanan()
    {
        return view('layanan publik');
    }

    public function wargaDashboard()
    {
        return view('warga.warga-dashboard');
    }

    public function wargaJadwal()
    {
        return view('warga.warga-jadwal');
    }

    public function wargaDetailJadwal()
    {
        return view('warga.warga-detail-jadwal');
    }
}

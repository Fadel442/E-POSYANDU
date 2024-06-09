<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landingPage()
    {
        return view('home');
    }

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

    public function wargaVaksin()
    {
        return view('warga.warga-vaksin');
    }

    public function wargaPengumunan()
    {
        return view('warga.warga-pengumuman');
    }

    public function adminSession()
    {
        return view('admin.admin-session');
    }

    public function adminDashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function adminInputUser()
    {
        return view('admin.admin-inputUser');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Bumil;
use App\Models\Jadwal;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.admin-dashboard');
    }
    public function adminDaftar()
    {
        return view('admin.admin-daftar');
    }
    public function daftarBumil()
    {
        $bumils = Bumil::all();
        return view('admin.admin-daftarBumil',['bumils' => $bumils]);
    }
    public function daftarAnak()
    {
        $anaks = Anak::all();
        return view('admin.admin-daftarAnak',['anaks' => $anaks]);
    }
    public function laporanAnak()
    {
        return view('admin.admin-laporanAnak');
    }
    public function tambahAnak()
    {
        
    }
    public function laporanBumil()
    {
        return view('admin.admin-laporanBumil');
    }
    public function adminMaster()
    {
        return view('admin.admin-master');
    }
    public function adminJadwal()
    {
        $jadwals = Jadwal::all();
        return view('admin.admin-masterJadwal',['jadwals' => $jadwals]);
    }
    public function adminVaksin()
    {
        $vaksins = Vaksin::all();
        return view('admin.admin-masterVaksin',['vaksins' => $vaksins]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function wargaDashboard()
    {
        return view('warga.warga-dashboard');
    }

    public function wargaJadwal()
    {
        $posts = Jadwal::orderBy('id','desc')->get();
        return view('warga.warga-jadwal',['posts' => $posts]);
    }

    public function wargaVaksin()
    {
        $posts = Vaksin::all();
        return view('warga.warga-vaksin',['posts' => $posts]);
    }

    public function wargaRiwayat()
    {
        return view('warga.warga-riwayat');
    }
}

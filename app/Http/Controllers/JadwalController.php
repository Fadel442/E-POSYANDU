<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Hash;

class JadwalController extends Controller
{
    public function addJadwal(Request $request){
        $validate = $request->validate([
            'bulan' => 'required',
            'tahun' => 'required',
        ]);
        $jadwal = new Jadwal();
        $jadwal->bulan = $request->input('bulan');
        $jadwal->tahun = $request->input('tahun');
        $jadwal->save();
        return redirect('/warga/jadwal');
    }
}

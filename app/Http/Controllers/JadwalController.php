<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function addJadwal(Request $request){
        $request->validate([
            'bulan' => 'required',
            'tahun' => 'required',
        ]);
        $jadwal = new Jadwal();
        $jadwal->bulan = $request->bulan;
        $jadwal->tahun = $request->tahun;
        $jadwal->save();
        return redirect('/admin/jadwal/baru/lokasi');
    }
}

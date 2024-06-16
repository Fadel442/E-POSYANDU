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
            'hari'  => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required'
        ]);
        $jadwal = new Jadwal();
        $jadwal->bulan = $request->bulan;
        $jadwal->tahun = $request->tahun;
        $jadwal->hari = $request->hari;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->lokasi = $request->lokasi;
        $jadwal->save();
        return redirect('/warga/jadwal');
    }
}

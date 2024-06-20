<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function addJadwal(Request $request)
    {
        $request->validate([
            'tempat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'tanggal' => 'required|date',
        ]);
        $jadwal = new Jadwal();
        $jadwal->tempat = $request->tempat;
        $jadwal->rt = $request->rt;
        $jadwal->rw = $request->rw;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->save();
        return back()->with('success', 'Data berhasil diubah bos');
    }

    public function hapusJadwal(int $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal')->with('success', 'Jadwal deleted successfully.');
    }
}

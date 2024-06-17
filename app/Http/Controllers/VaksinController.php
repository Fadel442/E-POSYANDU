<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function tambahVaksin(Request $request){
        $validate = $request->validate([
            'vaksin' => 'required',
            'jumlah' => 'required',
        ]);
        $data = $request->except('jumlah');
        $data['jumlah'] = (int) $request->jumlah;
        // Warga::create($data);
        Vaksin::create($data);
        return redirect()->route('vaksin');
    }

    public function hapusVaksin(int $id){
        $jadwal = Vaksin::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('vaksin')->with('success', 'Jadwal deleted successfully.');
    }
}

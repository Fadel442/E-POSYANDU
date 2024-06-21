<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnakController extends Controller
{
    public function tambahAnak(Request $request){
        $request->validate([
            'namaanak' => 'required',
            'namaibu' => 'required',
            'nik' => 'required|unique:anaks,nik|unique:users,nik',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'userid' => 'required',
            'password' => 'required'
        ]);

        $user_data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('namaanak'),
            'password' => $request->input('password'),
            'userid' => $request->input('userid'),
            'role' => 2,
        ];

        $user = User::create($user_data);

        $anak_data = [
            'anak_id' => $user->id,
            'namaanak' => $request->input('namaanak'),
            'namaibu' => $request->input('namaibu'),
            'alamat' => $request->input('alamat'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'nik' => $request->input('nik'),
        ];

        $anak = Anak::create($anak_data);

        return back()->with('success', 'Data Anak berhasil ditambahkan');
    }

    public function hapusAnak(int $id){
        $anak = Anak::findOrFail($id);
        $anak->delete();

        return redirect()->route('anak')->with('success', 'anak deleted successfully.');
    }
}


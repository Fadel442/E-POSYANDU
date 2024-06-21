<?php

namespace App\Http\Controllers;

use App\Models\Bumil;
use App\Models\User;
use Illuminate\Http\Request;

class BumilController extends Controller
{
    public function tambahBumil(Request $request){
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:bumils,nik|unique:users,nik',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'userid' => 'required',
            'password' => 'required'
        ]);

        $user_data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('nama'),
            'password' => $request->input('password'),
            'userid' => $request->input('userid'),
            'role' => 2,
        ];

        $user = User::create($user_data);

        $bumil_data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'nik' => $request->input('nik'),
        ];

        $anak = Bumil::create($bumil_data);

        return redirect()->route('bumil');
    }

    public function hapusBumil(int $id){
        $anak = Bumil::findOrFail($id);
        $anak->delete();

        return redirect()->route('bumil')->with('success', 'anak deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index(){
        $posts = Vaksin::all();
        return view('admin.admin-manajemenVaksin', compact('posts'));
    }

    public function addVaksin(){
        return view('admin.admin-tambahVaksin');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'vaksin' => 'required',
            'jumlah' => 'required',
        ]);
        $data = $request->except('jumlah');
        $data['jumlah'] = (int) $request->jumlah;
        // Warga::create($data);
        Vaksin::create($data);
        return redirect()->route('admin-vaksin');
    }
}

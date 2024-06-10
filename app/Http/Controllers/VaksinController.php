<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index(){
        return view('dummyaddvaksin');
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
        return redirect('/warga/vaksin');
    }
}

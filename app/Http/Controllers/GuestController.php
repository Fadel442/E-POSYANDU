<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vaksin;
use App\Models\Warga;
use App\Models\Jadwal;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{

    use AuthenticatesUsers;

    public function landingPage()
    {
        $title = 'E-POSYANDU';
        return view('home',compact('title'));
    }

    public function alurLayanan()
    {
        $title = 'Layanan Publik';
        return view('layanan publik',compact('title'));
    }

    public function registerWarga(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'password' => 'required'
        ]);
        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        // Warga::create($data);
        User::create($data);
        return redirect('/admin/dashboard');
    }

    public function loginWarga(Request $request)
    {
        $credentials = $request->validate([
            'userid' => ['required','numeric','digits:6'],
            'password' => ['required','string','min:6'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

             // Redirect based on user role
             if (auth()->user()->role === 'admin') {
                return redirect()->route('admin');
            } elseif (auth()->user()->role === 'bidan') {
                return redirect()->route('bidan');
            } else {
                return redirect()->route('user');
            }
        }
        // return redirect()->intended(route('warga-dashboard'));

        return redirect()->back()->with('error', 'NIK atau Password anda salah.');
    }

    public function galeri()
    {
        return view('galeri');
    }
}

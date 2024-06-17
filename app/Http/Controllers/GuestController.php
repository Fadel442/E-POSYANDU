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
        return view('home');
    }

    public function alurLayanan()
    {
        return view('layanan publik');
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
            'nik' => ['required'],
            'password' => ['required'],
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
}

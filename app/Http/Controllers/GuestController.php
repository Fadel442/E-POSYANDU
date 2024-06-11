<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vaksin;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    public function landingPage()
    {
        return view('home');
    }

    public function alurLayanan()
    {
        return view('layanan publik');
    }

    public function wargaDashboard()
    {
        return view('warga.warga-dashboard');
    }

    public function wargaJadwal()
    {
        return view('warga.warga-jadwal');
    }

    public function wargaDetailJadwal()
    {
        return view('warga.warga-detail-jadwal');
    }

    public function wargaVaksin()
    {
        $posts = Vaksin::all();
        return view('warga.warga-vaksin',['posts' => $posts]);
    }

    public function wargaPengumunan()
    {
        return view('warga.warga-pengumuman');
    }

    public function adminSession()
    {
        return view('admin.admin-session');
    }

    public function adminDashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function adminInputUser()
    {
        return view('admin.admin-inputUser');
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
            return redirect()->intended(route('warga-dashboard'));
        }

        return back()->withErrors([
            'nik' => 'Maaf NIK tidak sesuai',
        ]);
    }

    public function dummyJadwalInput()
    {
        return view('admin.admin-inputJadwal');
    }

    public function dummyLokasi()
    {
        return view('admin.admin-inputLokasi');
    }
}

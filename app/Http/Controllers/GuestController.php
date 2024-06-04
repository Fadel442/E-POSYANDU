<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function alurLayanan()
    {
        return view('layanan publik');
    }

    public function adminDashboard()
    {
        return view('admins.admin-dashboard');
    }
}

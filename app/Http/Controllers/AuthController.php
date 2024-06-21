<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        $title = 'Sign In';
        return view('auth.login',compact('title'));
    }
}

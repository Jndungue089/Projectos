<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function successLogin(){
        return view ('dashboard');
    }
}

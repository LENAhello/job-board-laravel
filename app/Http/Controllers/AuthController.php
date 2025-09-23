<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signupForm(){
        return view('auth.signup');
    }
    public function loginForm(){
        return view('auth.login');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signupForm(){
        return view('auth.signup');
    }
    public function signup(Request $request){
        // Validate input
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'], // confirmed checks password_confirmation
        ]);

        // Create user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // hash the password!
        ]);

        // Optionally log the user in right away
        auth()->login($user);

        // Redirect somewhere
        return redirect()->route('jobs.index')->with('success', 'Account created successfully!');
    }
    public function loginForm(){
        return view('auth.login');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
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
            'role' => ['required', 'string'], 
        ]);

        // Create user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // hash the password!
            'role' => $validated['role'],
        ]);

        // Optionally log the user in right away
        auth()->login($user);

        // Redirect somewhere
        return redirect()->route('jobs.index')->with('success', 'Account created successfully!');
    }
    public function loginForm(){
        return view('auth.login');
    }
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // Attempt to log in
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // regenerate session to prevent fixation attacks
            $request->session()->regenerate();
    
            return redirect()->intended(route('jobs.index')) // redirect to jobs list/ dashboard
                             ->with('success', 'Welcome back!');
        }
    
        // If login failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('jobs.index')->with('success', 'You have been logged out.');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}

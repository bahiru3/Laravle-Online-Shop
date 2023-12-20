<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Assuming you have a 'login' blade file
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authenticate the user
        if (auth()->attempt($credentials)) {
            // Redirect to the appropriate page after successful login
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back to login form
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}
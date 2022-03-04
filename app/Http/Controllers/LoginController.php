<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function loginAction(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [], [
            'username' => 'email',
        ]);

        if (Auth::attempt(['email' => $validated['username'], 'password' => $validated['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withInput()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

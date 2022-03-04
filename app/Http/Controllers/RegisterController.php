<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('register');
    }

    public function registerAction(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ], [], [
            'username' => 'email',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);

        if (!$user) {
            return back()->withInput()->withErrors([
                'username' => 'Something went wrong when creating an account.',
            ]);
        }

        return redirect()->route('login');
    }
}

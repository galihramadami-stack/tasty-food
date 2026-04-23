<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     * Inilah fungsi yang hilang tadi!
     */
    public function showLogin()
    {
        return view('auth.login'); 
        // Pastikan kamu punya file di: resources/views/auth/login.blade.php
    }

    /**
     * Memproses data login (POST)
     */
    public function login(Request $request)
    {
        // 1. Validasi
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Cek Login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan ke rute 'admin.dashboard'
            return redirect()->route('admin.dashboard');
        }

        // 3. Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Proses Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
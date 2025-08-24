<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function login()
    {
        return view('cms.login');
    }
    public function dashboard()
    {
        return view('cms.dashboard');
    }

    public function portofolio()
    {
        return view('cms.portofolio');
    }
    public function logout()
    {
        // Logout user
        Auth::logout();

        // Hapus session jika perlu
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect()->route('cms.login')->with('success', 'Berhasil logout!');
    }
}

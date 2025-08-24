<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

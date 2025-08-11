<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index()
    {
        return view('home');
    }
    function aboutUs()
    {
        return view('aboutUs');
    }
    function service()
    {
        return view('service');
    }
    function portofolio()
    {
        return view('portofolio');
    }
    function contact()
    {
        return view('contact');
    }
    function ourProducts()
    {
        return view('ourProducts');
    }
}

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    
    <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <title>@yield('title')</title>

 <!-- Favicon -->
 <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/faficon.png') }}">
 <!-- Jika punya favicon.ico -->
 <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo/faficon.png') }}">

 <!-- Bootstrap min css -->
 <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

 <!-- Mean menu css -->
 <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />

 <!-- All min css (fontawesome, dll) -->
 <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />

 <!-- Swiper bundle min css -->
 <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />

 <!-- Magnific popup css -->
 <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

 <!-- Animate css -->
 <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />

 <!-- Nice select css -->
 <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />

 <!-- Main style css -->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

 <!-- Tambahan CSS dari halaman lain -->
 @yield('css')

</head>

<body style="background-color: white">
    <!-- Preloader area start -->
    <!-- <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div> -->
    <!-- <div id="preloader">
    </div> -->
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <!-- Header area start here -->
    @extends('layouts.header')

    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide light-area">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="assets/images/logo/logo.svg" alt="logo" />
        </a>

        <div class="mobile-menu overflow-hidden"></div>


        <a href="contact.html" class="btn-one" style="border-radius: 50px; padding: 10px 20px;  ">GET A QUOTE</a>

        <button id="closeButton" class="text-white">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    <div class="search-wrap">
        <div class="search-inner">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h2>Our Service</h2>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <!-- Fullscreen search area end here -->
       @yield('content')
     

    </div>
    </div>
    @extends('layouts.footer')
</body>

</html>

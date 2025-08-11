{{-- <!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    
    <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <title>@yield('title')</title>

 <!-- Favicon -->
 <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/faficon.png') }}3') }}">
 <!-- Jika punya favicon.ico -->
 <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo/faficon.png') }}3') }}">

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
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo" />
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

</html> --}}
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOFFEL TECH ASIA</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/faficon.png') }}" />
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
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
    <header class="header-area header-three-area">
        <div class="container header__container">
            <div class="header__main">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                           
                            <li><a href="{{ url('/portofolio') }}">Portofolio</a></li>
                            <li><a href="{{ url('/our-products') }}">Produk & Layanan</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-none d-xl-flex gap-4">
                    <a href="{{ url('/contact') }}" class="btn-one"
                        style="border-radius: 50px; padding: 10px 20px; ">Get A Quote</a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide light-area">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" />
        </a>

        <div class="mobile-menu overflow-hidden"></div>


        <a href="{{ url('/contact') }}" class="btn-one" style="border-radius: 50px; padding: 10px 20px;  ">Get A
            Quote</a>

        <button id="closeButton" class="text-white">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Fullscreen search area start here -->
    {{-- <div class="search-wrap">
        <div class="search-inner">
            <div class="row">
                <div class="col-md-6 text-white">
                    <h2>Our Service</h2>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div> --}}
    <!-- Fullscreen search area end here -->
    @yield('content')


    </div>
    </div>
    @extends('layouts.footer')

    <!-- Back to top area start here -->
    <div style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <a href="https://wa.me/2085550112" target="_blank">
            <img src="{{ asset('assets/images/hompage/whatsapp.png') }}" alt="WhatsApp"
                style="width: 50px; height: 50px;">
        </a>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3.7.0 Min Js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Mean menu Js -->
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Pace min Js -->
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

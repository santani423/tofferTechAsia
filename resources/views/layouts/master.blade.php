<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    
    @extends('layouts.head')
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


        <a href="contact.html" class="btn-one" style="border-radius: 50px; padding: 10px 20px;  ">GET IN TOUCH</a>

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

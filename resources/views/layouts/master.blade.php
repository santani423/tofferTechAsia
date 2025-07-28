<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    @include('layouts.head')
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
    @include('layouts.header')
    <!-- Header area end here -->

 

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
    <!-- Fulscreen search area end here -->
    @yield('content')
  

    </div>
    </div>
    @include('layouts.footer')
</body>

</html>

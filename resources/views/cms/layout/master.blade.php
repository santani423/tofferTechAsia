<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zinzer - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <div class="header-bg">
            <!-- Navigation Bar-->
                @include('cms.layout.header')
            <!-- End Navigation Bar-->

        </div>
        <!-- header-bg -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
              @yield('content')
                <!-- end page title end breadcrumb -->



            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer d-print-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2019 - 2020 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('template/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/waves.js') }}"></script>
        <script src="{{ asset('template/assets/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('template/assets/js/app.js') }}"></script>

    </body>
</html>
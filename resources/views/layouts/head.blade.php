<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>@yield('title')</title>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo/logo.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/logo.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo/logo.png') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}" type="image/x-icon">

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

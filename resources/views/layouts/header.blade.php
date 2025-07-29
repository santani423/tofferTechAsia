<header class="header-area header-three-area">
        <div class="container header__container">
            <div class="header__main">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about-us')}}">About Us</a></li>
                            <li><a href="{{url('/')}}">Service</a></li>
                            <li><a href="{{url('/')}}">Portofolio</a></li> 
                        </ul>
                    </nav>
                </div>
                <div class="d-none d-xl-flex gap-4">
                    <a href="contact.html" class="btn-one" style="border-radius: 50px; padding: 10px 20px; ">GET IN TOUCH</a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

       <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide light-area">
        <div class="sidebar__overlay"></div>
        <a href="index.html" class="logo mb-40">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo" />
        </a>

        <div class="mobile-menu overflow-hidden"></div>


        <a href="contact.html" class="btn-one" style="border-radius: 50px; padding: 10px 20px;  ">GET IN TOUCH</a>

        <button id="closeButton" class="text-white">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <!-- Sidebar area end here -->
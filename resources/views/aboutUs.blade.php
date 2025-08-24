@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
        <!-- Banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
            style="background: rgba(0, 7, 73, 50)">
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX"
                    src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
                    alt="shape" />
            </div>
            <div class="container text-center">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    About Us
                </h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>About Us</span>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Blog single area start here -->
        <section class="blog-single-area pt-120 pb-120" style="color: black;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <div class="blog__item blog-single__left-item shadow-none">
                            <div class="blog__content p-0">
                                <h3 class="blog-single__title mt-20" style="color: black;">
                                    Our Story
                                </h3>
                                <p class="mb-20 mt-20" style="color: black;">
                                    To become a leading company in
                                    providing technology solutions that
                                    drive digital transformation across all
                                    sectors, while advancing businesses
                                    through the technological excellence
                                    we deliver.
                                </p>
                                <p class="mb-20 mt-20" style="color: black;">
                                    We are a technology company dedicated to delivering innovative, high-tech
                                    solutions that empower businesses and individuals to optimize their full potential.
                                    By combining deep expertise in technology, creativity, and innovation, we create
                                    products and services designed to meet diverse digital needs in the modern era.
                                    PT. Toffel Tech Asia operates in the Information and Communication Technology (ICT)
                                    sector, focusing on software-based digital solutions, system integration, and
                                    technology consulting services for both public and private sectors.
                                </p>
                                <ul style="color: black;">
                                    <li>Mission
                                        <ol>
                                            <li>To become a leading company in
                                                providing technology solutions that
                                                drive digital transformation across all
                                                sectors, while advancing businesses
                                                through the technological excellence
                                                we deliver.</li>
                                        </ol>
                                    </li>
                                    <li>Nilai-Nilai Kami</li>
                                </ul>
                                <ol>
                                    <li>To develop innovative and
                                        user-friendly technology solutions.</li>
                                    <li>To provide the best services to clients
                                        in achieving their digital goals.</li>
                                    <li>To build an inclusive and sustainable
                                        technology ecosystem.</li>
                                    <li>To deliver added value to businesses
                                        through automation, AI, and data.</li>
                                </ol>
                                {{-- <p class="mb-20 mt-20">
                                    Kami bekerja dengan berbagai sektor, termasuk perbankan, e-commerce, kesehatan, dan
                                    manufaktur. Melalui pengalaman kami yang luas dan tim yang terdiri dari para profesional
                                    teknologi terbaik, kami siap membantu bisnis Anda tumbuh dan berkembang dalam era
                                    digital ini.
                                </p> --}}


                                <div class="service-two-area secondary-bg pt-120 pb-120"
                                    style="background-color: #1A67D4 ; border-radius: 10px; height: auto;">
                                    <div class="service-two__shape-left sway_Y__animationY">
                                        <img src="{{ asset('assets/images/hompage/img1.png') }}" alt="shape"
                                            style="width: 50%; height: auto; opacity: 0.5;" />
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="pricing__content">
                                                    <h2 class="pricing__title text-white">Trusted by ever 250 Users
                                                        Worldwide Since 2024</h2>

                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="counter__item wow bounceInUp" data-wow-delay="00ms"
                                                            data-wow-duration="1000ms">
                                                            <h1
                                                                style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                10</h1>
                                                            <div class="content">

                                                                <p
                                                                    style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                    Year Ecperience</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="counter__item wow bounceInUp" data-wow-delay="00ms"
                                                            data-wow-duration="1000ms">
                                                            <h1
                                                                style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                90+ </h1>
                                                            <div class="content">

                                                                <p
                                                                    style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                    Happy Customers</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="counter__item wow bounceInUp" data-wow-delay="00ms"
                                                            data-wow-duration="1000ms">
                                                            <h1
                                                                style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                17 </h1>
                                                            <div class="content">

                                                                <p
                                                                    style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                    Talented Team</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="counter__item wow bounceInUp" data-wow-delay="00ms"
                                                            data-wow-duration="1000ms">
                                                            <h1
                                                                style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                8 </h1>
                                                            <div class="content">

                                                                <p
                                                                    style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">
                                                                    Service Available</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- <h3 class="blog-single__title mt-20">
                                    Why us
                                </h3>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <h5 style="color: blue;">Inovasi Terdepan</h5>
                                        <p>
                                            Kami selalu berusaha berada di garis depan teknologi dan inovasi
                                            untuk menawarkan solusi terbaik yang sesuai dengan perkembangan zaman.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="color: blue;">Kualitas Terjamin</h5>
                                        <p>
                                            Produk dan layanan kami telah melalui proses kontrol kualitas
                                            yang ketat, sehingga kami dapat menjamin keandalan yang tinggi untuk setiap
                                            pelanggan.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="color: blue;">Transparansi</h5>
                                        <p>
                                            Kepercayaan pelanggan adalah prioritas utama kami. Kami
                                            berkomitmen untuk selalu transparan dalam setiap transaksi dan komunikasi.

                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="color: blue;">Layanan Pelanggan</h5>
                                        <p>
                                            Kami hadir untuk melayani Anda kapan saja. Layanan
                                            pelanggan kami tersedia 24/7 untuk membantu Anda mendapatkan solusi yang Anda
                                            butuhkan.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style="color: blue;">Harga Kompetitif</h5>
                                        <p>
                                            Kami menawarkan harga yang terjangkau dan kompetitif tanpa
                                            mengorbankan kualitas produk dan layanan.
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog single area end here -->
    </main>
@endsection

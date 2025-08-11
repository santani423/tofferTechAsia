@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
        <!-- Banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}" style="background: rgba(0, 7, 73, 50)">
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
                    alt="shape" />
            </div>
            <div class="container text-center">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" >
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
                                    Kami adalah perusahaan teknologi yang berdedikasi untuk menghadirkan solusi inovatif dan
                                    berbasis teknologi tinggi yang membantu bisnis dan individu mengoptimalkan potensi
                                    mereka. Dengan menggabungkan pengetahuan mendalam di bidang teknologi, kreativitas, dan
                                    inovasi, kami menciptakan produk dan layanan yang dapat menjawab berbagai kebutuhan
                                    digital di era modern.
                                    Visi Kami Menjadi perusahaan terdepan dalam menyediakan solusi teknologi yang mendukung
                                    transformasi digital di seluruh sektor, serta memajukan bisnis dengan keunggulan
                                    teknologi yang kami hadirkan.
                                </p>
                                <ul style="color: black;">
                                    <li>Misi Kami
                                        <ol>
                                            <li>Mengembangkan solusi teknologi yang inovatif dan mudah digunakan.</li>
                                            <li>Memberikan layanan terbaik kepada klien untuk mencapai tujuan digital
                                                mereka.</li>
                                            <li>Membangun ekosistem teknologi yang inklusif dan berkelanjutan.</li>
                                            <li>Memberikan nilai tambah pada bisnis melalui otomatisasi, AI, dan teknologi
                                                data.</li>
                                        </ol>
                                    </li>
                                    <li>Nilai-Nilai Kami</li>
                                </ul>
                                <ol>
                                    <li>Inovasi: Kami selalu berupaya mengembangkan ide dan teknologi terbaru untuk terus
                                        memberikan solusi terbaik.</li>
                                    <li>Kolaborasi: Kami percaya pada kerja sama yang kuat, baik dengan tim internal maupun
                                        mitra bisnis.</li>
                                    <li>Keberlanjutan: Kami berkomitmen untuk membangun solusi yang tidak hanya berguna
                                        tetapi juga berkelanjutan dalam jangka panjang.</li>
                                    <li>Integritas: Kepercayaan dan transparansi adalah pondasi hubungan kami dengan klien.
                                    </li>
                                </ol>
                                <p class="mb-20 mt-20">
                                    Kami bekerja dengan berbagai sektor, termasuk perbankan, e-commerce, kesehatan, dan
                                    manufaktur. Melalui pengalaman kami yang luas dan tim yang terdiri dari para profesional
                                    teknologi terbaik, kami siap membantu bisnis Anda tumbuh dan berkembang dalam era
                                    digital ini.
                                </p>


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

                                <h3 class="blog-single__title mt-20">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog single area end here -->
    </main>
@endsection

@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
        <!-- Banner area start -->
        <section class="banner__inner-page bg-image pt-180 pb-180 position-relative"
            data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
            style="background: rgba(0, 7, 73, 0.6) url('{{ asset('assets/images/banner/banner-inner-page.jpg') }}') center/cover no-repeat;">

            <!-- Shape Decoration -->
            <div class="shape3 wow slideInRight d-none d-md-block" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX"
                    src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
                    alt="shape" />
            </div>

            <!-- Banner Text -->
            <div class="container text-center text-white position-relative z-2">
                <h2 class="wow fadeInUp display-4 fw-bold mb-3" data-wow-delay="0ms">Produk & Layanan</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms">
                    <a href="/" class="text-white text-decoration-none fw-semibold">Home</a>
                    <span class="mx-2"><i class="fa-regular fa-angles-right"></i></span>
                    <span>Produk & Layanan</span>
                </div>
            </div>
        </section>
        <!-- Banner area end -->

        <!-- Produk & Layanan Section -->
        <section class="py-5" style="color: #333;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <!-- Produk -->
                        <h3 class="fw-bold text-primary border-start border-4 ps-3 mb-4">Produk</h3>
                        <ol class="ps-3">
                            <li class="mb-4">
                                <strong>CBAS (Credit Bureau Analysis System)</strong>
                                <p class="mb-0 mt-2">
                                    Sebuah sistem otomatis yang membantu lembaga keuangan menganalisis
                                    kredit dengan mengelola data SLIK OJK, mengambil data peminjam dan riwayat
                                    pinjaman, serta
                                </p>
                            </li>

                            <li class="mb-4">
                                <strong>ERP Construction</strong>
                                <p class="mb-2">Aplikasi ERP untuk manajemen proyek konstruksi dengan modul:</p>
                                <div class="row g-3" style="color: black">
                                    @foreach (['Budgeting', 'Vendor Management', 'Accounting', 'Procurement', 'HR & Payroll', 'Project Management'] as $module)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm border-0 h-100 hover-shadow"
                                                style="border-radius: 12px;">
                                                <div class="card-body text-center">
                                                    <span class="fw-semibold"
                                                        style="color: black">{{ $module }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </li>

                            <li class="mb-4">
                                <strong>CMMS (Computerized Maintenance Management System)</strong>
                                <p class="mb-0 mt-2">
                                    Sistem pemeliharaan aset yang membantu meningkatkan efisiensi operasional dan waktu
                                    aktif peralatan.
                                </p>
                            </li>

                            <li>
                                <strong>Chatbot</strong>
                                <p class="mb-0 mt-2">
                                    Chatbot pintar untuk berbagai kebutuhan interaksi bisnis dan pelanggan.
                                </p>
                            </li>
                        </ol>

                        <!-- Layanan -->
                        <h3 class="fw-bold text-primary border-start border-4 ps-3 mt-5 mb-4">Layanan</h3>
                        <div class="row g-4">
                            @php
                                $services = [
                                    [
                                        'icon' => 'fas fa-code',
                                        'title' => 'Development',
                                        'desc' => [
                                            'Implementasi produk',
                                            'Custom development',
                                            'Pengembangan website & mobile apps',
                                        ],
                                    ],
                                    [
                                        'icon' => 'fas fa-network-wired',
                                        'title' => 'Network & Infrastruktur',
                                        'desc' => ['Instalasi dan pemeliharaan jaringan dan server'],
                                    ],
                                    [
                                        'icon' => 'fas fa-microchip',
                                        'title' => 'Pengembangan Solusi IoT',
                                        'desc' => ['Menyediakan solusi IoT sesuai kebutuhan bisnis'],
                                    ],
                                    [
                                        'icon' => 'fas fa-user-tie',
                                        'title' => 'Pro Services',
                                        'desc' => [
                                            'Penyediaan tenaga ahli (developer, network engineer, dll.) sesuai kebutuhan proyek klien',
                                        ],
                                    ],
                                ];
                            @endphp

                            @foreach ($services as $service)
                                <div class="col-lg-3 col-md-6">
                                    <div class="card shadow-sm border-0 text-center text-white h-100 hover-scale"
                                        style="background: linear-gradient(180deg, #4BA0FF, #0066CC); border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <i class="{{ $service['icon'] }} fa-3x mb-3"></i>
                                            <h5 class="fw-bold">{{ $service['title'] }}</h5>
                                            @foreach ($service['desc'] as $d)
                                                <p class="mb-1 small">{{ $d }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Extra CSS -->
    <style>
        .hover-shadow:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
            transform: translateY(-3px);
            transition: all 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.03);
            transition: all 0.3s ease;
        }
    </style>
@endsection

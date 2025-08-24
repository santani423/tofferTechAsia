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
                <h2 class="wow fadeInUp display-4 fw-bold mb-3" data-wow-delay="0ms">Product and Services</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms">
                    <a href="/" class="text-white text-decoration-none fw-semibold">Home</a>
                    <span class="mx-2"><i class="fa-regular fa-angles-right"></i></span>
                    <span>Product and Services</span>
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
                        <h3 class="fw-bold text-primary border-start border-4 ps-3 mb-4">Product</h3>
                        <ol class="ps-3">
                            <li class="mb-4">
                                <strong>CBAS (Credit Bureau Automation System)</strong>
                                <p class="mb-0 mt-2">
                                    An automated system that helps financial institutions analyze credit by managing
                                    OJK SLIK data, retrieving borrower information and loan history, and assessing credit-
                                    worthiness.
                                </p>
                            </li>

                            <li class="mb-4">
                                <strong>General Ledger (GL) System</strong>
                                <p class="mb-0 mt-2">
                                    It’s the company’s core financial recording system. All financial transactions are
                                    recorded in the form of debit and credit journals, and the system automatically
                                    generates key reports such as the Balance Sheet and Income Statement.
                                </p>
                                <div class="d-flex align-items-center mb-3">
                                    <span class="feature-icon me-3"><i class="bi bi-check2-square"></i></span>
                                    <h5 class="mb-0" style="color: #333;">With the GL System, companies can:</h5>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="bi bi-check2 me-2"></i>Record daily transactions neatly
                                    </li>
                                    <li class="mb-2"><i class="bi bi-check2 me-2"></i>Presenting financial reports quickly
                                        and accurately</li>
                                    <li class="mb-2"><i class="bi bi-check2 me-2"></i>Serve as the foundation for
                                        developing other accounting modules (pay-
                                        ables, receivables, assets, etc.)</li>
                                </ul>
                            </li>

                            <li class="mb-4">
                                <strong>Untrix</strong>
                                {{-- <p class="mb-2">Aplikasi ERP untuk manajemen proyek konstruksi dengan modul:</p> --}}
                                <div class="row g-3" style="color: black">
                                    @foreach (['E-Procurement ', 'Procurement', 'Budget', 'Account Payable', 'Fixed Asset ', 'Prepaid', 'Inventory', 'Tax', 'Accounting'] as $module)
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
                                    An asset maintenance system that helps improve operational efficiency and
                                    equipment uptime.
                                </p>
                            </li>

                            <li>
                                <strong>Chatbot</strong>
                                <p class="mb-0 mt-2">
                                    An intelligent chatbot for various business and customer interaction needs.
                                </p>
                            </li>
                        </ol>

                        <!-- Layanan -->
                        <h3 class="fw-bold text-primary border-start border-4 ps-3 mt-5 mb-4">Services</h3>
                        <div class="row g-4">
                            @php
                                $services = [
                                    [
                                        'icon' => 'fas fa-code',
                                        'title' => 'Development',
                                        'desc' => [
                                            'Product Implemntation',
                                            'Custom Development',
                                            'Website & Mobile Apps Development',
                                        ],
                                    ],
                                    // [
                                    //     'icon' => 'fas fa-network-wired',
                                    //     'title' => 'Network & Infrastructure',
                                    //     'desc' => ['Instalasi dan pemeliharaan jaringan dan server'],
                                    // ],
                                    [
                                        'icon' => 'fas fa-microchip',
                                        'title' => 'Network & Infrastruktur',
                                        'desc' => ['Network and Server Installation & Maintenance'],
                                    ],
                                    [
                                        'icon' => 'fas fa-microchip',
                                        'title' => 'IoT Solution Development',
                                        'desc' => [],
                                    ],
                                    [
                                        'icon' => 'fas fa-user-tie',
                                        'title' => 'Pro Services',
                                        'desc' => [
                                            'Provision of skilled
professionals
(developers, network
engineers, etc.)
tailored
to client project needs.',
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

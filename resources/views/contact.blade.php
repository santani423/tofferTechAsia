@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
        <!-- Banner -->
        <section class="banner__inner-page pt-180 pb-180 text-white position-relative"
            style="background: linear-gradient(rgba(0,7,73,0.6), rgba(0,7,73,0.6)), url('{{ asset('assets/images/banner/banner-inner-page.jpg') }}') center/cover;">
            <div class="shape3 wow slideInRight d-none d-md-block" data-wow-delay="200ms">
                <img class="sway__animationX"
                    src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
                    alt="shape" />
            </div>
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3"
                    style="background: linear-gradient(to right, #41DBD1, #1A67D4); -webkit-background-clip: text; color: transparent;">
                    Layanan Kami
                </h1>
                <div class="breadcrumb-list">
                    <a href="/" class="text-white">Beranda</a>
                    <span class="mx-2"><i class="fa-regular fa-angles-right"></i></span>
                    <span>Tentang Kami</span>
                </div>
            </div>
        </section>

        <!-- Konten -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-lg-7">
                        <h3 class="fw-bold text-dark">Menghadapi Perubahan di Industri Ritel</h3>
                        <p class="text-muted">
                            Kami memahami bahwa dunia ritel terus berubah dengan cepat. Dengan pengalaman dan teknologi yang
                            tepat,
                            kami membantu bisnis Anda beradaptasi, meningkatkan efisiensi, dan memberikan nilai lebih bagi
                            pelanggan.
                        </p>

                        <!-- Formulir Kontak -->
                        <form id="whatsappForm">
                            @php
                                $fields = [
                                    'Nama Lengkap' => 'Masukkan nama Anda',
                                    'Nomor Telepon' => 'Masukkan nomor telepon aktif',
                                    'Email' => 'Masukkan alamat email Anda',
                                    'Nama Perusahaan' => 'Masukkan nama perusahaan',
                                    'Industri' => 'Contoh: Ritel, Teknologi, Pendidikan',
                                    'Kategori' => 'Contoh: Produk, Jasa, Konsultasi',
                                    'Isi Pesan / Pembahasan' => 'Tuliskan pertanyaan atau topik yang ingin dibahas',
                                ];
                            @endphp

                            @foreach ($fields as $label => $placeholder)
                                <div class="mb-3">
                                    <label class="form-label text-primary fw-semibold">{{ $label }}</label>
                                    @if (str_contains($label, 'Pesan') || str_contains($label, 'Pembahasan'))
                                        <textarea class="form-control" name="{{ $label }}" placeholder="{{ $placeholder }}" rows="3"></textarea>
                                    @else
                                        <input type="text" class="form-control" name="{{ $label }}"
                                            placeholder="{{ $placeholder }}">
                                    @endif
                                </div>
                            @endforeach

                            <button type="submit" class="btn btn-success px-4 py-2 mt-2">
                                <i class="fab fa-whatsapp me-2"></i> Kirim via WhatsApp
                            </button>
                        </form>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-lg-5">
                        <h4 class="fw-bold">PT. Toffel Tech Asia</h4>
                        <p class="text-primary fw-semibold mb-1">Alamat</p>
                        <p class="text-muted">
                            Kp. Ceger, RT. 007 RW. 002 No. 44,<br>
                            Desa/Kelurahan Lebak Wangi,<br>
                            Sepatan Timur, Banten 15521
                        </p>

                        <div class="mb-2">
                            <p class="text-primary fw-semibold mb-0">Telepon</p>
                            <p class="text-muted">0816-1944-538</p>
                        </div>
                        <div class="mb-2">
                            <p class="text-primary fw-semibold mb-0">Email</p>
                            <p class="text-muted">wira@toffeltechasia.com</p>
                        </div>
                        <div>
                            <p class="text-primary fw-semibold mb-0">Website</p>
                            <p class="text-muted">toffeltechasia.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Peta -->
        <!-- Peta -->
        <section class="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27561.959654931947!2d106.55475971083983!3d-6.138934999999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a01004155c835%3A0x82f5e74b34c022a8!2sKp%20Ceger!5e1!3m2!1sid!2sid!4v1754933708491!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

    </main>

    <!-- Script Kirim WhatsApp -->
    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let message = "Halo, saya ingin menghubungi PT. Toffel Tech Asia.%0A%0A";
            formData.forEach((value, key) => {
                message += `*${key}*: ${value}%0A`;
            });
            let phone = "628161944538"; // nomor WA tujuan dalam format internasional
            let url = `https://wa.me/${phone}?text=${message}`;
            window.open(url, '_blank');
        });
    </script>
@endsection

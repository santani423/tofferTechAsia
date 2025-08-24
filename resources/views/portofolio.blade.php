@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')

@section('content')

<main>
  <!-- Custom CSS -->
  <style>
    .case__item {
      border-radius: 16px;
      overflow: hidden;
      background-color: #001f4e;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease;
      position: relative;
    }
    .case__item:hover { transform: translateY(-5px); }
    .case__image img {
      width: 100%; height: 220px; object-fit: cover;
      border-radius: 16px 16px 0 0;
      box-shadow: none !important;
    }
    .case__content { padding: 20px; }
    .case__btn {
      position: absolute; bottom: 20px; right: 20px;
      padding: 10px 15px; background: #1A67D4; color: #fff;
      border-radius: 8px; font-size: 16px;
    }
    .case__btn:hover { background: #41DBD1; color: #000; }
  </style>

  <!-- Banner -->
  <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
    style="background: rgba(0, 7, 73, 50)">
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
      <img class="sway__animationX"
        src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
        alt="shape"/>
    </div>
    <div class="container text-center">
      <h1 class="wow fadeInUp"
        style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%);
               -webkit-background-clip: text; color: transparent;">
        Portofolio
      </h1>
      <div class="breadcrumb-list wow fadeInUp">
        <a href="{{ url('/') }}">Home</a>
        <span><i class="fa-regular fa-angles-right mx-2"></i>Portofolio</span>
      </div>
    </div>
  </section>
  <!-- Banner end -->

  <!-- Portofolio area -->
  <section class="case-area pt-120 pb-120">
    <div class="container">
      <div class="row g-4" id="portofolio-list">
        <div class="col-12 text-center">
          <p class="text-light">Memuat data portofolio...</p>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@section('scripts')
<script>
  const apiUrl = "{{ url('/api/portofolio') }}";
  const container = document.getElementById("portofolio-list");

  async function loadPortofolio() {
    try {
      const res = await fetch(apiUrl);
      const data = await res.json();

      container.innerHTML = "";

      if (!data.data || data.data.length === 0) {
        container.innerHTML = `<div class="col-12 text-center text-light"><p>Tidak ada portofolio.</p></div>`;
        return;
      }

      data.data.forEach(item => {
        let imageUrl = item.image ? `${item.image}` : "https://via.placeholder.com/400x220";

        container.innerHTML += `
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="case__item">
              <div class="image case__image">
                <img src="${imageUrl}" alt="${item.title}">
              </div>
              <div class="case__content">
                <span class="primary-color sm-font">${item.category ?? ''}</span>
                <h3><a href="${item.link ?? '#'}" class="text-white primary-hover">${item.title}</a></h3>
                <p class="text-light small">${item.description ?? ''}</p>
              </div>
            </div>
          </div>
        `;
      });
    } catch (error) {
      console.error(error);
      container.innerHTML = `<div class="col-12 text-center text-danger"><p>Gagal memuat data.</p></div>`;
    }
  }

  document.addEventListener("DOMContentLoaded", loadPortofolio);
</script>
@endsection

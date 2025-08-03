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

    .case__item:hover {
      transform: translateY(-5px);
    }

    .case__image img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 16px 16px 0 0;
      box-shadow: none !important; /* HILANGKAN SHADOW PADA GAMBAR */
    }

    .case__content {
      padding: 20px;
    }

    .case__btn {
      position: absolute;
      bottom: 20px;
      right: 20px;
      padding: 10px 15px;
      background: #1A67D4;
      color: #fff;
      border-radius: 8px;
      font-size: 16px;
    }

    .case__btn:hover {
      background: #41DBD1;
      color: #000;
    }
  </style>

  <!-- Banner area start here -->
  <section
    class="banner__inner-page bg-image pt-180 pb-180 bg-image"
    data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
    style="background: rgba(0, 7, 73, 50)"
  >
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
      <img
        class="sway__animationX"
        src="{{ asset('assets/images/about/Deep dive - Digital infrastructure - Banner 1.png') }}"
        alt="shape"
      />
    </div>
    <div class="container text-center">
      <h1
        class="wow fadeInUp"
        data-wow-delay="00ms"
        data-wow-duration="1500ms"
        style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%);
               -webkit-background-clip: text;
               color: transparent;"
      >
        Portofolio
      </h1>
      <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <a href="index.html">Home</a>
        <span><i class="fa-regular fa-angles-right mx-2"></i>About Us</span>
      </div>
    </div>
  </section>
  <!-- Banner area end here -->

  <!-- Portofolio card area -->
  <section class="case-area pt-120 pb-120">
    <div class="container">
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="case__item">
            <div class="image case__image">
              <img src="{{ asset('assets/images/portofolio/daffana.png') }}" alt="image">
            </div>
            <div class="case__content">
              <span class="primary-color sm-font">Website Development</span>
              <h3><a href="#" class="text-white primary-hover">Daffana Nusantara</a></h3>
            </div> 
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="case__item">
            <div class="image case__image">
              <img src="{{ asset('assets/images/portofolio/kemenku.png') }}" alt="image">
            </div>
            <div class="case__content">
              <span class="primary-color sm-font">Cybertrend Kemenku</span>
              <h3><a href="#" class="text-white primary-hover">UI/UX Development</a></h3>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection

@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
      <!-- Banner area start here -->
      <section
        class="banner__inner-page bg-image pt-180 pb-180 bg-image"
        data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
        style="background: rgba(0, 7, 73, 50)"
      >
        <div
          class="shape3 wow slideInRight"
          data-wow-delay="200ms"
          data-wow-duration="1500ms"
        >
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
            style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; color: transparent;"
          >
           Portofolio
          </h1>
          <div
            class="breadcrumb-list wow fadeInUp"
            data-wow-delay="200ms"
            data-wow-duration="1500ms"
          >
            <a href="index.html">Home</a
            ><span 
              ><i class="fa-regular fa-angles-right mx-2"></i>About Us</span
            >
          </div>
        </div>
      </section>
      <!-- Banner area end here -->

      <!-- Cause area start here -->
      <section class="case-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-image1.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">Technology</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">Platform
                                    Integration</a></h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-image2.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">Technology</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">IT Management</a></h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-image3.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">Solution</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">Web Development</a>
                            </h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-image4.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">Security</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">Network Security</a>
                            </h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-two-image1.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">DEVELOPMENT</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">Product Design</a></h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="case__item">
                        <div class="image case__image">
                            <img src="{{ asset('assets/images/case/case-two-image4.jpg') }}" alt="image">
                        </div>
                        <div class="case__content">
                            <span class="primary-color sm-font">Design</span>
                            <h3><a href="case-details.html" class="text-white primary-hover">UI/UX Design</a></h3>
                        </div>
                        <a href="case-details.html" class="case__btn">
                            <i class="fa-regular fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pegi justify-content-center mt-60">
          <a href="#0" class="active">01</a>
          <a href="#0">02</a>
          <a href="#0">03</a>
          <a href="#0"><i class="fa-solid fa-arrow-right-long primary-color transition"></i></a>
      </div>
    </section>
    <!-- Cause area end here -->
<!-- Map area end here -->
    </main>
      
@endsection 
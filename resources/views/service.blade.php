@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
   
    <main style="color: black"> 
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
           Our Services
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

      <!-- Blog single area start here -->
      <section class="blog-single-area pt-120 pb-120">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-12 order-2 order-lg-1">
              <div class="blog__item blog-single__left-item shadow-none">
                <div class="blog__content p-0">
                  <h3 class="blog-single__title mt-20" style="color: black">
                    Tackling the Changes of Retail Industry
                  </h3>
                  <p class="mb-20 mt-20" style="color: black">
                    Consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore of magna aliqua. Ut enim ad
                    minim veniam, made of owl the quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea dolor commodo
                    consequat. Duis aute irure and dolor in reprehenderit.
                  </p>
                 
                  <p class="mb-20 mt-20">
                    Consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore of magna aliqua. Ut enim ad
                    minim veniam, made of owl the quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea dolor commodo
                    consequat. Duis aute irure and dolor in reprehenderit.
                  </p>

                  <div class="row" style="color: black">
                    <div class="col-md-5" style="color: black"><h3 class="blog-single__title mt-20" style="color: black">
                        Tackling the Changes of Retail Industry
                      </h3></div>
                    <div class="col-md-7">
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 style="color: blue;">Tackling</h5>
                              <p>
                                Pellentesque sollicitudin congue dolor non aliquam.
                              </p>
                            </div>
                            <div class="col-md-6">
                              <h5 style="color: blue;">Tackling</h5>
                              <p>
                                Pellentesque sollicitudin congue dolor non aliquam.
                              </p>
                            </div>
                            <div class="col-md-6">
                              <h5 style="color: blue;">Tackling</h5>
                              <p>
                                Pellentesque sollicitudin congue dolor non aliquam.
                              </p>
                            </div>
                            <div class="col-md-6">
                              <h5 style="color: blue;">Tackling</h5>
                              <p>
                                Pellentesque sollicitudin congue dolor non aliquam.
                              </p>
                            </div> 
                          </div>
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
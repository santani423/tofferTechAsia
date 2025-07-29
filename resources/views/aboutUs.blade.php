@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
     <main>
      <!-- Banner area start here -->
      <section
        class="banner__inner-page bg-image pt-180 pb-180 bg-image"
        data-background="{{ asset('assets/images/banner/banner-inner-page.jpg') }}"
        style="background: rgba(0, 7, 73, 50) , color:black"
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
          <h2
            class="wow fadeInUp"
            data-wow-delay="00ms"
            data-wow-duration="1500ms"
          >
            About Us
          </h2>
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
      <section class="blog-single-area pt-120 pb-120" style="color:black">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-12 order-2 order-lg-1">
              <div class="blog__item blog-single__left-item shadow-none">
                <div class="blog__content p-0">
                  <h3 class="blog-single__title mt-20" style="color: black">
                    Tackling the Changes of Retail Industry
                  </h3>
                  <p class="mb-20 mt-20">
                    Consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore of magna aliqua. Ut enim ad
                    minim veniam, made of owl the quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea dolor commodo
                    consequat. Duis aute irure and dolor in reprehenderit.
                  </p>
                  <ul>
                    <li>List item 1
                      <ol>
                        <li>Ordered item 1</li>
                        <li>Ordered item 2</li>
                        <li>Ordered item 3</li>
                        <li>Ordered item 4</li>
                      </ol>
                    </li>
                    <li>List item 2</li>
                  </ul>
                  <ol>
                    <li>Ordered item 1</li>
                    <li>Ordered item 2</li>
                  </ol>
                  <p class="mb-20 mt-20">
                    Consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore of magna aliqua. Ut enim ad
                    minim veniam, made of owl the quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea dolor commodo
                    consequat. Duis aute irure and dolor in reprehenderit.
                  </p>
              

                  <div
                  class="service-two-area secondary-bg pt-120 pb-120"
                  style="background-color: #1A67D4 ; border-radius: 10px; height: auto;"
                >
                  <div class="service-two__shape-left sway_Y__animationY">
                    <img
                      src="{{ asset('assets/images/hompage/img1.png') }}"
                      alt="shape"
                      style="width: 50%; height: auto; opacity: 0.5;"
                    />
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="pricing__content">
                          <h2 class="pricing__title text-white">Trusted by ever 250 Users Worldwide Since 2010</h2>
                           
                        </div>
                      </div>
                      <div class="col-md-7">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                                <h1 style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">10</h1>
                                <div class="content">
                                     
                                    <p style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">Year Ecperience</p>
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                                <h1 style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;"> 90+ </h1>
                                <div class="content">
                                     
                                    <p style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">Happy Customers</p>
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                                <h1 style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;"> 17 </h1>
                                <div class="content">
                                     
                                    <p style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">Talented Team</p>
                                </div>
                            </div>
                            </div> 
                            <div class="col-md-6">
                              <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                                <h1 style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;"> 8 </h1>
                                <div class="content">
                                     
                                    <p style="background: linear-gradient(to right, #41DBD1, #3881E8); -webkit-background-clip: text; color: transparent;">Service Available</p>
                                </div>
                            </div>
                            </div> 
                          </div>
                      </div>
                    </div>
                     
                  </div>
                </div>
               
                  <h3 class="blog-single__title mt-20">
                    Tackling the Changes of Retail Industry
                  </h3>
                  <div class="row mt-4">
                    <div class="col-md-4">
                        <h5 style="color: blue;">Tackling</h5>
                      <p>
                        Pellentesque sollicitudin congue dolor non aliquam.
                        Morbi volutpat, nisi vel ultricies urnacondimentum,
                        sapien neque lobortis tortor, quis efficitur mi ipsum eu
                        metus. Praesent eleifend orci sit amet est vehicula.
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: blue;">Tackling</h5>
                      <p>
                        Pellentesque sollicitudin congue dolor non aliquam.
                        Morbi volutpat, nisi vel ultricies urnacondimentum,
                        sapien neque lobortis tortor, quis efficitur mi ipsum eu
                        metus. Praesent eleifend orci sit amet est vehicula.
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: blue;">Tackling</h5>
                      <p>
                        Pellentesque sollicitudin congue dolor non aliquam.
                        Morbi volutpat, nisi vel ultricies urnacondimentum,
                        sapien neque lobortis tortor, quis efficitur mi ipsum eu
                        metus. Praesent eleifend orci sit amet est vehicula.
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: blue;">Tackling</h5>
                      <p>
                        Pellentesque sollicitudin congue dolor non aliquam.
                        Morbi volutpat, nisi vel ultricies urnacondimentum,
                        sapien neque lobortis tortor, quis efficitur mi ipsum eu
                        metus. Praesent eleifend orci sit amet est vehicula.
                      </p>
                    </div>
                    <div class="col-md-4">
                      <h5 style="color: blue;">Tackling</h5>
                      <p>
                        Pellentesque sollicitudin congue dolor non aliquam.
                        Morbi volutpat, nisi vel ultricies urnacondimentum,
                        sapien neque lobortis tortor, quis efficitur mi ipsum eu
                        metus. Praesent eleifend orci sit amet est vehicula.
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
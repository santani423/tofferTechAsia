@extends('layouts.master')

@section('title', 'TOFFEL TECH ASIA1')
@section('content')
    <main>
        <!-- Banner area start here -->
        <section class="banner-two-area">
            <div class="banner-two__line">
                <!-- <img
                                                        class="sway_Y__animation"
                                                        src="{{ asset('assets/images/banner/banner-line.png') }}"
                                                            alt="shape" /> -->
            </div>
            <div class="swiper banner__slider">
                <div class="swiper-wrapper"
                    style="
                    background-image: url('{{ asset('assets/images/hompage/17935-%5BConverted%5D-edit%202.png') }}');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                ">

                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-two__content text-center">
                                <h1 data-animation="fadeInUp" data-delay=".5s"
                                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
                                    Turning Ideas Into Reality
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                    Our development team utilizes the latest technology to
                                    ensure that your applications are high performing and
                                    user-friendly. which meets the highest standards
                                </p>
                                <div style="
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: white;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                  "
                                    class="mt-5">
                                    <i class="fa-solid fa-arrow-down" style="color: black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-two__content text-center">
                                <!-- <h4
                                                data-animation="fadeInUp"
                                                data-delay=".3s"
                                                class="text-white mb-20"
                                              >
                                                TECHNOLOGY RELETED CONSULTANCY
                                              </h4> -->
                                <h1 data-animation="fadeInUp" data-delay=".5s"
                                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
                                    Turning Ideas Into Reality
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                    Our development team utilizes the latest technology to
                                    ensure that your applications are high performing and
                                    user-friendly. which meets the highest standards
                                </p>
                                <div style="
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: white;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                  "
                                    class="mt-5">
                                    <i class="fa-solid fa-arrow-down" style="color: black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="banner-two__content text-center">
                                <!-- <h4
                                            data-animation="fadeInUp"
                                            data-delay=".3s"
                                            class="text-white mb-20"
                                          >
                                            TECHNOLOGY RELETED CONSULTANCY
                                          </h4> -->
                                <h1 data-animation="fadeInUp" data-delay=".5s"
                                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
                                    Turning Ideas Into Reality
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".7s" class="mt-20">
                                    Our development team utilizes the latest technology to
                                    ensure that your applications are high performing and
                                    user-friendly. which meets the highest standards
                                </p>
                                <div style="
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: white;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                  "
                                    class="mt-5">
                                    <i class="fa-solid fa-arrow-down" style="color: black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="banner__dot-wrp banner-two__dot-wrp">
                                                      <div class="dot-light banner__dot"></div>
                                                    </div> -->
        </section>
        <!-- Banner area end here -->

        <!-- Brand area start here -->
        <div class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 brand__wrp" style="border-radius: 0 10px 10px 0">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-white">/ WELCOME</p>
                                <h2 class="text-white">Where good idea meets expertise</h2>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    We are a dynamic team of tech enthusiasts, developers, and creative thinkers who are
                                    passionate about creating custom software solutions that drive business success. Toffel
                                    Tech Asia is dedicated to delivering cutting-edge software products and services
                                    tailored to our clients’ unique needs. Whether you’re a startup looking to build your
                                    first app or an established company looking to streamline operations, our team is ready
                                    to bring your vision to life.
                                </p>
                                <button type="button" class="btn btn-outline-dark mt-5 text-white"
                                    style="border-radius: 50px; border-color: white;">Discover More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end here -->

        <!-- About area end here -->
        <section class="service-two-area secondary-bg pt-120 pb-120" style="background-color: white">
            <div class="service-two__shape-left sway_Y__animationY">
                <img src="{{ asset('assets/images/hompage/img1.png') }}" alt="shape" style="width: 50%; height: auto" />
            </div>
            <div class="container">
                <div class="section-header text-center mb-60" style="z-index: 1; position: relative">

                    </h5>
                    <p class="wow fadeInUp text-black fs-1">
                        More than <b>1+ companies</b> trusted us
                    </p>
                    <p class="wow fadeInUp text-black fs-3">
                        We are very fortunate to have formed excellent partnerships with client.
                    </p>
                </div>
                <div class="row g-4">
                    <div
                        class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp d-flex justify-content-center align-items-center mt-2">
                        <div class="team__item">
                            <div class="image d-flex justify-content-center align-items-center"
                                style="height: 100%; width: 100%;">
                                <img src="{{ asset('assets/images/compenie/cybertrend.png') }}" alt="image"
                                    style="max-width: 100%; max-height: 100%;" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp d-flex justify-content-center align-items-center mt-2">
                        <div class="team__item">
                            <div class="image d-flex justify-content-center align-items-center"
                                style="height: 100%; width: 100%;">
                                <img src="{{ asset('assets/images/compenie/daffana.png') }}" alt="image"
                                    style="max-width: 100%; max-height: 100%;" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp d-flex justify-content-center align-items-center mt-2">
                        <div class="team__item">

                        </div>
                    </div>
                    <div>


                    </div>
                </div>
        </section>

        <section class="service-two-area secondary-bg pt-120 pb-120" style="background-color: white">
            <div class="service-two__shape-left sway_Y__animationY" style="width: 10vw; height: auto">
                <img src="{{ asset('assets/images/icon/Group79.png') }}" alt="shape"
                    style="width: 100%; height: auto" />
            </div>
            <div class="service-two__shape-right sway_Y__animation" style="width: 10vw; height: auto">
                <img src="{{ asset('assets/images/icon/Group 80.png') }}" alt="shape"
                    style="width: 100%; height: auto" />
            </div>
            <div class="container">
                <div class="section-header text-center mb-60" style="z-index: 1; position: relative">
                    <h2 class="wow fadeInLeft fs-1" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="color: #E0E0E0;">
                        We offer a <span
                            style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">full-cycle</span>,
                        comprehensive <span
                            style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">solution</span>
                    </h2>
                    <div style="width: 1px; height: 100px; background-color: #1A67D4; margin: 20px auto;"></div>
                </div>
            </div>
        </section>
        <div class="row justify-content-end">
            <div class="col-md-11">
                <!-- Cause area start here -->
                <section class="testimonial-three-area pt-120 pb-120 bg-image sub-bg"
                    data-background="{{ asset('assets/images/bg/img_device.png') }}" style="background-color: #0F0522;">
                    <div class="testimonial-three__wrp">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="section-header mb-40">
                                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        / SERVICE
                                    </h5>
                                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        APPLICATION DEVELOPMENT
                                    </h2>
                                    <p>
                                        We here for you...
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center mt-5">
                                <div
                                    style="
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-color: white;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                  ">
                                    <i class="fa-solid fa-arrow-right" style="color: black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Cause area end here -->
                <div class="brand-area">
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <div class="brand__wrp d-flex" style="padding: 25px; margin-top: -40px">
                                    <div class="brand__shape d-flex justify-content-start"></div>
                                    <div class="testimonial-three__arry-btn d-flex gap-3 wow fadeInDown"
                                        data-wow-delay="400ms" data-wow-duration="1500ms">
                                        < <div
                                            style="width: 100px; height: 1px; background-color: white; margin-top: 14px ;">
                                    </div>>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Blog area start here -->
        <section class="blog-two-area mt-5 position-relative text-center  ">
            <div class="container text-center">
                <div class="d-flex flex-wrap gap-4 m-5">

                    <h2 class="wow fadeInLeft"
                        style="position: absolute; top: 15vw; left: 0; z-index: 1; font-size: 6vw; color: #E0E0E0; line-height: 100px;">
                        Our <span
                            style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">Powerful</span>
                    </h2>
                    <h2 class="wow fadeInLeft"
                        style="position: absolute; top: 25vw; left: 0; z-index: 1; font-size: 6vw; color: #E0E0E0; line-height: 100px;">
                        Value
                    </h2>
                </div>
            </div>
            <img src="{{ asset('assets/images/hompage/chart.png') }}" style="width: 80%; height: auto;" alt="" />
            </div>
        </section>
        <!-- Blog area end here -->
        <!-- Service area start here -->
        <section class="service-two-area secondary-bg pt-120 pb-120">
            <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img class="sway_Y__animation" src="{{ asset('assets/images/hompage/img2.png') }}"
                    style="width: 50%; height: auto; float: right;" alt="shape">
            </div>
            <div class="container">
                <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-60">
                    <div class="section-header">
                        <h5 class="wow fadeInLeft " data-wow-delay="00ms" data-wow-duration="1500ms"
                            style="color: #686868;">

                            / PROJECTS
                        </h5>
                        <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            Featured Works
                        </h2>
                    </div>
                    <div class="arry-btn d-flex gap-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <button class="arry-prev service__arry-prev">
                            <i class="fa-light fa-chevron-left"></i>
                        </button>
                        <button class="arry-next service__arry-next active">
                            <i class="fa-light fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="swiper service-two__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service/cbisikd.png') }}" alt="image" />
                                </div>
                                <div class="service-two__content">
                                    <h4>
                                        <a href="service-details.html" class="primary-hover">UI/UX Development</a>
                                    </h4>
                                    <p>
                                        We do UI/UX development for Fenom Dashboard for Cybertrend (Kemkeu Project)
                                    </p>
                                    <a class="read-more-btn" href="service-details.html"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-two__item">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service/daffanaweb.png') }}" alt="image" />
                                </div>
                                <div class="service-two__content">
                                    <h4>
                                        <a href="service-details.html" class="primary-hover">Web Development</a>
                                    </h4>
                                    <p>
                                        Website for Daffana Tour
                                    </p>
                                    <a class="read-more-btn" href="service-details.html"></a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>

        <!-- Service area end here -->
        <!-- Quote area start here -->
        <div class="brand-area" style="padding: 0; margin: 0; background-color: #0f0d1d;">
            <div class="container-fluid" style="padding: 0; margin: 0;"></div>
            <div class="  d-flex" style="width: 100%; background-color: #0f0d1d; padding: 0; margin: 0;">
                <img src="{{ asset('assets/images/bg/Ellipse5.png') }}"
                    style="width: 100vw; height: 30vh; object-fit: cover; padding: 0; margin: 0;" alt="">
                <div class="brand__shape d-flex justify-content-start"></div>
            </div>
        </div>
        </div>
        <!-- Quote area end here -->
        <section class="quote-area">

            <div class="container">
                <div style="margin-top: -180px; background-color: white;">

                    <div class="d-flex   gap-4 align-items-center justify-content-center text-center">
                        <div class="section-header">
                            <h5 class="wow fadeInLeft " data-wow-delay="00ms" data-wow-duration="1500ms"
                                style="color: #686868;">

                                / PROJECTS
                            </h5>
                            <h2 class="wow fadeInLeft " data-wow-delay="200ms" data-wow-duration="1500ms"
                                style="color: #E0E0E0;">
                                <span
                                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">Taking</span>
                                Your Businesss to the <span
                                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">Next
                                    Level</span>
                            </h2>
                            <div class="d-none d-xl-flex gap-4 justify-content-center text-center mt-5  ">
                                <a href="#" class="btn-one"
                                    style="border-radius: 50px; padding: 10px 20px;">Discuss My Project</a>
                            </div>
                            <h3 class="text-black mt-5">Headquarters</h3>
                            <p class="text-black">Jalan Raya Serpong Nomor 39, RT. 002/RW. 003, Kel. Pakulonan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15325</p>
                            <h5 class="wow fadeInLeft " data-wow-delay="00ms" data-wow-duration="1500ms">
                              <a href="https://goo.gl/maps/ALPCMEm45p6ZnYZS8">  <i class="fa-solid fa-map-marker-alt"></i></a>
                                view on google map
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

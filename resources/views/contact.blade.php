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
                <h1 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
                    style="background: linear-gradient(to right, #41DBD1 10%, #1A67D4 100%); -webkit-background-clip: text; color: transparent;">
                    Our Services
                </h1>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>About Us</span>
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



                                <div class="row">

                                    <div class="col-md-7">
                                        <h3 class="blog-single__title mt-20" style="color: black;">
                                            Tackling the Changes of Retail Industry
                                        </h3>
                                        <p style="color: black;">
                                            Consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore of magna aliqua. Ut enim ad
                                            minim veniam, made of owl the quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea dolor commodo
                                            consequat. Duis aute irure and dolor in reprehenderit.
                                        </p>
                                        <table style="width: 100%;">
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Name</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Name</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Phone Number</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Phone Number</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Email</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Email</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Company Name</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Company Name</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Industry</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Industry</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Category</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Category</td>
                                            </tr>
                                            <tr>
                                                <th style="padding-right: 15px;">
                                                    <p style="color: blue;" class="ml-5">Contents of the Discussion</p>
                                                </th>
                                                <td style="padding-left: 20px; border-bottom: 1px solid gray; color: grey;">
                                                    Contents of the Discussion</td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="col-md-5">
                                        <h4>
                                            Toffel Tech Asia
                                        </h4>
                                        <p style="color: blue;" class="ml-5">Address</p>
                                        <p style="padding-left: 20px;  color: grey;">1234 Street Name, City, Country</p>
                                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                            <p style="color: blue; width: 100px;">Phone</p>
                                            <p style="color: grey;">+123 456 7890</p>
                                        </div>
                                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                                            <p style="color: blue; width: 100px;">Email</p>
                                            <p style="color: grey;">info@example.com</p>
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
        <!-- Map area start here -->
        <section class="map-area" style="width: 100%; height: auto;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019112484635!2d144.9630579153168!3d-37.81410797975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d1b6b1b1b1b1!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1611811234567!5m2!1sen!2sau"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <!-- Map area end here -->
    </main>
@endsection

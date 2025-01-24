@extends('website.app')
@section('title', 'Kajal SPA')
@section('content')


    <!-- HERO-12
       ============================================= -->
    <section id="hero-1" class="hero-section division">


        <!-- SLIDER -->
        <div class="slider">
            <ul class="slides">


                <!-- SLIDE #1 -->
                <li id="slide-1" class="" style="opacity: 0; transform: translateX(0px) translateY(0px);">

                    <!-- Background Image -->
                    <img src="{{ asset('/website/assets/images/slider/slide-1.jpg') }}" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center left-align"
                        style="opacity: 0; transform: translateX(-100px);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="caption-txt white-color">

                                        <!-- Title -->
                                        <h2>Deep Tissue Massage</h2>

                                        <!-- Text -->
                                        <p>Feugiat primis ligula gravida auctor mauri egestas undo augue viverra
                                            tortor in iaculis a
                                            placerat eugiat ipsum
                                        </p>

                                        <!-- Button -->
                                        <a href="booking.html" class="btn btn-md btn-color-02 tra-white-hover">Book an
                                            Appointment</a>

                                    </div>
                                </div>
                            </div> <!-- End row -->
                        </div> <!-- End container -->
                    </div> <!-- End Image Caption -->

                </li> <!-- END SLIDE #1 -->


                <!-- SLIDE #2 -->
                <li id="slide-2" class="" style="opacity: 0; transform: translateX(0px) translateY(0px);">

                    <!-- Background Image -->
                    <img src="{{ asset('/website/assets/images/slider/slide-2.jpg') }}" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center right-align"
                        style="opacity: 0; transform: translateX(100px);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="caption-txt white-color">

                                        <!-- Title -->
                                        <h2>Body Massage</h2>

                                        <!-- Text -->
                                        <p>Your ultimate destination for relaxation, wellness, and premium services. We
                                            bring together skilled professionals

                                        </p>

                                        <!-- Button -->
                                        <a href="#services-10" class="btn btn-md btn-color-02 tra-white-hover">Find Out
                                            More</a>

                                    </div>
                                </div>
                            </div> <!-- End row -->
                        </div> <!-- End container -->
                    </div> <!-- End Image Caption -->

                </li> <!-- END SLIDE #2 -->


                <!-- SLIDE #3 -->
                <li id="slide-3" style="opacity: 1; transform: translateX(0px) translateY(0px);" class="active">

                    <!-- Background Image -->
                    <img src="{{ asset('/website/assets/images/slider/slide-3.jpg') }}" alt="slide-background">

                    <!-- Image Caption -->
                    <div class="caption d-flex align-items-center right-align"
                        style="opacity: 1; transform: translateX(0px) translateY(0px);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="caption-txt white-color">

                                        <!-- Title -->
                                        <h2>Customized Massage</h2>

                                        <!-- Text -->
                                        <p>Discover a world of tailored services designed to meet your unique needs. Whether
                                            you're looking for relaxation, expert guidance
                                        </p>

                                        <!-- Button -->
                                        <a href="#pricing-1" class="btn btn-md btn-color-02 tra-white-hover">Pricing &amp;
                                            Packages</a>

                                    </div>
                                </div>
                            </div> <!-- End row -->
                        </div> <!-- End container -->
                    </div> <!-- End Image Caption -->

                </li> <!-- END SLIDE #3 -->

            </ul>
            <ul class="indicators">
                <li class="indicator-item"></li>
                <li class="indicator-item"></li>
                <li class="indicator-item active"></li>
            </ul>
        </div> <!-- END SLIDER -->


    </section>




    <!-- ABOUT-2
       ============================================= -->
    <section id="about-2" class="bg-color-01 wide-60 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center m-row">


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6 m-bottom">
                    <div class="txt-block left-column pc-15 mb-40">

                        <!-- Title -->
                        <h3 class="h3-md txt-color-01">Massage in Noida Sector 18</h3>

                        <!-- Text -->
                        <p class="txt-color-05">Looking for a massage center in Noida Sector 18? Discover Kaal spa, offering
                            premium body massage services at the best prices. Experience relaxation, rejuvenation, and
                            expert care tailored to your needs. Visit Kaal spa for a revitalizing massage session today!







                        </p>

                        <!-- List -->


                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6 m-top">
                    <div class="img-block right-column pc-15 mb-40">
                        <img class="img-fluid" src="{{ asset('/website/assets/images/image-01.png') }}" alt="about-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-2 -->




    <!-- SERVICES-16
       ============================================= -->
    <section id="services-16" class="bg-color-01 pb-80 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Commodo integer
                        </h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">REVITALIZING FACE MASKS

                        </h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Kajal Spa Provides our Customer relaxation during the massage


                        </p>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 gallery-items-list">
                    <div class="masonry-wrap grid-loaded">


                        <!-- SERVICE BOX #1 -->
                        <div class="masonry-item sbox-16">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-20.jpg') }}"
                                    alt="service-image" />
                                <div class="sbox-16-overlay"></div>

                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Makeup Essentials</h5>
                                        <p class="p-lg">SPA & Massage Therapy</p>
                                        <a href="service-details.html" class="btn btn-color-02 tra-white-hover">Find Out
                                            More</a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- END SERVICE BOX #1 -->


                        <!-- SERVICE BOX #2 -->
                        <div class="masonry-item sbox-16">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-13.jpg') }}"
                                    alt="gallery-image" />
                                <div class="sbox-16-overlay"></div>

                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Relaxing Massage</h5>
                                        <p class="p-lg">SPA & Wellness</p>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- END SERVICE BOX #2 -->


                        <!-- SERVICE BOX #3 -->
                        <div class="masonry-item sbox-16">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-21.jpg') }}"
                                    alt="gallery-imagee" />
                                <div class="sbox-16-overlay"></div>

                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Supreme Skincare</h5>
                                        <p class="p-lg">Aroma & Skin Care</p>
                                        <a href="service-details.html" class="btn btn-color-02 tra-white-hover">Find Out
                                            More</a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- END SERVICE BOX #3 -->


                        <!-- SERVICE BOX #4 -->
                        <div class="masonry-item sbox-16">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-16.jpg') }}"
                                    alt="gallery-image" />
                                <div class="sbox-16-overlay"></div>

                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Herbal Care</h5>
                                        <p class="p-lg">SPA & Aromatherapy</p>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- END SERVICE BOX #4 -->


                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section> <!-- END SERVICES-16 -->




    <!-- SERVICES-1
       ============================================= -->
    <section id="services-1" class="bg-color-02 wide-60 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Makeup Essentials</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Discover a beautiful you </h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Discover Ayurvedic body massage oil for sparkling pores and skin at
                            Forest Essentials. Beauty therapists offer face and frame remedies to assist customers
                            appearance and sense better. Discover the daily obligations you will do on this role. Enjoy the
                            method of discovery as you discover ways to do facial rubdown to your personal


                        </p>

                    </div>
                </div>
            </div>


            <!-- SERVICES-1 WRAPPER -->
            <div class="sbox-1-wrapper">
                <div class="row">


                    <!-- SERVICE BOX #1 -->
                    <div class="col-md-4">
                        <div class="sbox-1">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ asset('/website/assets/images/serv-01.png') }}"
                                alt="service-image" />

                            <!-- Title -->
                            <h5 class="h5-md txt-color-01">Aromatherapy</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula
                                risus auctor tempus
                                dolor feugiat lacinia ultrice in ligula
                            </p>

                        </div>
                    </div>


                    <!-- SERVICE BOX #2 -->
                    <div class="col-md-4">
                        <div class="sbox-1">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ asset('/website/assets/images/serv-02.png') }}"
                                alt="service-image" />

                            <!-- Title -->
                            <h5 class="h5-md txt-color-01">Relax</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula
                                risus auctor tempus dolor
                                feugiat lacinia ultrice in ligula
                            </p>

                        </div>
                    </div>


                    <!-- SERVICE BOX #3 -->
                    <div class="col-md-4">
                        <div class="sbox-1">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ asset('/website/assets/images/serv-03.png') }}"
                                alt="service-image" />

                            <!-- Title -->
                            <h5 class="h5-md txt-color-01">Massage</h5>

                            <!-- Text -->
                            <p class="txt-color-05">Porta semper lacus cursus feugiat primis ultrice in ligula
                                risus auctor tempus dolor
                                feugiat lacinia ultrice in ligula
                            </p>

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END SERVICES-1 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END SERVICES-1 -->




    <!-- SERVICES-10
       ============================================= -->
    <section id="services-10" class="bg-color-01 wide-60 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Welcome To</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Massage Therapy Center</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <!-- SERVICES-10 WRAPPER -->
            <div class="sbox-10-wrapper">
                <div class="row">


                    <!-- SERVICE BOX #1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="sbox-10 bg-white text-center">

                            <!-- Image -->
                            <div class="sbox-10-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('/website/assets/images/serv-13.jpg') }}"
                                        alt="service-image" />
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-10-txt">

                                <!-- Title -->
                                <h5 class="h5-sm txt-color-01">Combination Massage</h5>

                                <!-- Text -->
                                <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum
                                    neque dolor</p>

                                <!-- Button -->
                                <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out
                                    More</a>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="sbox-10 bg-white text-center">

                            <!-- Image -->
                            <div class="sbox-10-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('/website/assets/images/serv-14.jpg') }}"
                                        alt="service-image" />
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-10-txt">


                                <!-- Title -->
                                <h5 class="h5-sm txt-color-01">Special Care Solutions</h5>

                                <!-- Text -->
                                <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum
                                    neque dolor</p>

                                <!-- Button -->
                                <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out
                                    More</a>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="sbox-10 bg-white text-center">

                            <!-- Image -->
                            <div class="sbox-10-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('/website/assets/images/serv-15.jpg') }}"
                                        alt="service-image" />
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-10-txt">

                                <!-- Title -->
                                <h5 class="h5-sm txt-color-01">Relaxing & Body Treatments</h5>

                                <!-- Text -->
                                <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum
                                    neque dolor</p>

                                <!-- Button -->
                                <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out
                                    More</a>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="sbox-10 bg-white text-center">

                            <!-- Image -->
                            <div class="sbox-10-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('/website/assets/images/serv-16.jpg') }}"
                                        alt="service-image" />
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-10-txt">

                                <!-- Title -->
                                <h5 class="h5-sm txt-color-01">Oils & Aromatherapy</h5>

                                <!-- Text -->
                                <p class="txt-color-05">Aliquam an augue suscipit luctus neque purus magna ipsum
                                    neque dolor</p>

                                <!-- Button -->
                                <a href="services.html" class="btn p-sm btn-tra-01 color-02-hover">Find Out
                                    More</a>

                            </div>

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END SERVICES-10 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END SERVICES-10 -->




    <!-- VIDEO-1
       ============================================= -->
    <div id="video-1" class="bg-fixed video-section division">
        <div class="container white-color">
            <div class="row">


                <!-- VIDEO LINK -->
                <div class="col-md-8 offset-md-2">
                    <div class="video-1-preview">
                        <a class="video-popup2" href="https://www.youtube.com/embed/7e90gBu4pas">
                            <!-- Change the link HERE!!! -->

                            <!-- Play Icon -->
                            <div class="video-btn bg-color-09">
                                <div class="video-block-wrapper"><i class="fas fa-play"></i></div>
                            </div>

                        </a>
                    </div>
                </div> <!-- END VIDEO LINK -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END VIDEO-1 -->




    <!-- ABOUT-3
       ============================================= -->
    <section id="about-3" class="bg-color-01 wide-60 about-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Experience</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Body And Soul Together</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <!-- ABOUT IMAGE -->
            <div class="row">
                <div class="col-md-12">
                    <div class="img-block">
                        <img class="img-fluid" src="{{ asset('/website/assets/images/image-12.jpg') }}"
                            alt="about-image">
                    </div>
                </div>
            </div>


            <!-- ABOUT BOXES WRAPPER -->
            <div class="abox-1-wrapper">
                <div class="row d-flex align-items-center">


                    <!-- ABOUT BOX #1 -->
                    <div class="col-md-4">
                        <div class="abox-1 mb-40">

                            <!-- Icon -->
                            <div class="abox-1-ico ico-75 txt-color-03">
                                <span class="flaticon-relax-stones"></span>
                            </div>

                            <!-- Text -->
                            <div class="abox-1-txt">
                                <h5 class="h5-xs txt-color-01">Safety Standards</h5>
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum
                                    egestas magna vitae purus</p>
                            </div>

                        </div>
                    </div>


                    <!-- ABOUT BOX #2 -->
                    <div class="col-md-4">
                        <div class="abox-1 mb-40">

                            <!-- Icon -->
                            <div class="abox-1-ico ico-75 txt-color-03">
                                <span class="flaticon-herbal-2"></span>
                            </div>

                            <!-- Text -->
                            <div class="abox-1-txt">
                                <h5 class="h5-xs txt-color-01">Lifestyle Program</h5>
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum
                                    egestas magna vitae purus</p>
                            </div>

                        </div>
                    </div>


                    <!-- ABOUT BOX #3 -->
                    <div class="col-md-4">
                        <div class="abox-1 mb-40">

                            <!-- Icon -->
                            <div class="abox-1-ico ico-75 txt-color-03">
                                <span class="flaticon-gift"></span>
                            </div>

                            <!-- Text -->
                            <div class="abox-1-txt">
                                <h5 class="h5-xs txt-color-01">Gift Cards</h5>
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum
                                    egestas magna vitae purus</p>
                            </div>

                        </div>
                    </div>


                </div> <!-- End row -->
            </div> <!-- END ABOUT BOXES WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END ABOUT-3 -->




    <!-- ABOUT-5
       ============================================= -->
    <section id="about-5" class="bg-color-01 pt-10 pb-20 rel about-section division">
        <div class="container">
            <div class="row d-flex align-items-center m-row">


                <!-- ABOUT BANNER -->
                <div class="about-5-banner bg-color-09 white-color m-bottom">

                    <!-- Title -->
                    <h5 class="h5-xl">Open Hours:</h5>

                    <!-- Text -->
                    <p>An magnis nulla dolor sapien augue porta iaculis a purus tempor magna and vitae purus primis
                        ipsum</p>

                    <!-- List -->
                    <ul class="simple-list w-hours mb-20">

                        <li class="list-item">
                            <p>Mon – Fri : 9:00 AM - 7:00 PM</p>
                        </li>

                        <li class="list-item">
                            <p>Saturday : 9:00 AM - 6:00 PM</p>
                        </li>

                        <li class="list-item">
                            <p>Sunday : Closed</p>
                        </li>

                    </ul> <!-- End Text List -->

                    <!-- Button -->
                    <a href="booking.html" class="btn btn-md btn-tra-white white-hover">Book Now</a>

                </div>


                <!-- ABOUT IMAGE -->
                <div class="col-md-12 col-lg-10 offset-lg-2 m-top">
                    <div class="about-5-img">
                        <img class="img-fluid" src="{{ asset('/website/assets/images/image-13.jpg') }}"
                            alt="about-image" />
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-5 -->








    <!-- BRANDS-1
       ============================================= -->
    <div id="brands-1" class="bg-color-02 brands-section division">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel">


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-11.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-12.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-13.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-14.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-15.png') }}"
                                alt="brand-logo">
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-16.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-17.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-18.png') }}"
                                alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/brand-19.png') }}"
                                alt="brand-logo" />
                        </div>


                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BRANDS-1 -->




    <!-- GALLERY-1
       ============================================= -->
    <section id="gallery-1" class="bg-color-01 wide-100 gallery-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Our Gallery</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Beautiful Skin Starts Here</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <!-- GALLERY FILTERING BUTTONS -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="masonry-filter mb-40">
                        <button data-filter="*" class="is-checked">All</button>
                        <button data-filter=".spa">Body Treatments</button>
                        <button data-filter=".massage">Massage</button>
                        <button data-filter=".aroma">Aroma Therapy</button>
                        <button data-filter=".herbs">Herbs</button>
                    </div>
                </div>
            </div>


            <!-- GALLERY IMAGES HOLDER -->
            <div class="row">
                <div class="col-md-12 gallery-items-list">
                    <div class="masonry-wrap grid-loaded">


                        <!-- IMAGE #1 -->
                        <div class="masonry-item spa massage">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-1.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-1.jpg">Hot
                                                Stones Therapy</a></h5>

                                        <!-- Project Meta -->
                                        <p>SPA & Massage Therapy</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #1 -->


                        <!-- IMAGE #2 -->
                        <div class="masonry-item spa">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-09.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link  -->
                                        <h5 class="h5-sm"><a class="image-link"
                                                href="images/gallery/img-09.jpg">Relaxing Massage</a></h5>

                                        <!-- Image Meta -->
                                        <p>SPA & Wellness</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #2 -->


                        <!-- IMAGE #3 -->
                        <div class="masonry-item aroma">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-2.jpg') }}"
                                    alt="gallery-imagee" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-2.jpg">Supreme
                                                Skincare</a></h5>

                                        <!-- Image Meta -->
                                        <p>Aroma & Skin Care</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #3 -->


                        <!-- IMAGE #4 -->
                        <div class="masonry-item spa">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-5.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-5.jpg">Hot
                                                Stones Therapy</a></h5>

                                        <!-- Image Meta -->
                                        <p>SPA & Aromatherapy</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #4 -->


                        <!-- IMAGE #5 -->
                        <div class="masonry-item massage herbs">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-3.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-3.jpg">Thai
                                                Massage</a></h5>

                                        <!-- Image Meta -->
                                        <p>Herbs & Skin Care</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #5 -->


                        <!-- IMAGE #6 -->
                        <div class="masonry-item herbs">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-4.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-4.jpg">Relaxing
                                                Massage</a></h5>

                                        <!-- Image Meta -->
                                        <p>Herbs & Massage Therapy</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #6 -->


                        <!-- IMAGE #7 -->
                        <div class="masonry-item aroma herbs">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-10.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-10.jpg">Facial
                                                Spa</a></h5>

                                        <!-- Image Meta -->
                                        <p>Herbs & Skin Care</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #7 -->


                        <!-- IMAGE #8 -->
                        <div class="masonry-item aroma">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-11.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-11.jpg">Scrub
                                                Massage</a></h5>

                                        <!-- Image Meta -->
                                        <p>Aroma & Massage Therapy</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #8 -->


                        <!-- IMAGE #9 -->
                        <div class="masonry-item spa massage">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/gallery/img-6.jpg') }}"
                                    alt="gallery-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Description -->
                                <div class="image-description white-color">
                                    <div class="image-data">

                                        <!-- Image Link -->
                                        <h5 class="h5-sm"><a class="image-link" href="images/gallery/img-6.jpg">Deep
                                                Tissue Massage</a></h5>
                                        <!-- Image Meta -->
                                        <p>SPA & Massage Therapy</p>

                                    </div>
                                </div>

                            </div>
                        </div> <!-- END IMAGE #9 -->


                    </div>
                </div>
            </div> <!-- END GALLERY IMAGES HOLDER -->


        </div> <!-- End container -->
    </section> <!-- END GALLERY-1 -->









    <!-- SERVICES-11
       ============================================= -->
    <section id="services-11" class="bg-color-01 wide-60 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Packages</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Relax, Renew, Revitalize</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <!-- SERVICES-11 WRAPPER -->
            <div class="sbox-11-wrapper">
                <div class="row">


                    <!-- SERVICE BOX #1 -->
                    <div class="col-md-6">
                        <div class="sbox-11">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-13.jpg') }}"
                                    alt="service-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Meta -->
                                <div class="sbox-11-img-meta white-color">

                                    <!-- Text -->
                                    <div class="sb-11-txt">
                                        <h5 class="h5-lg">Combination Massage</h5>
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Dtox Custom Massage (20 min)</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Dtox Custom Facial (50 min)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="sbox-11-price">
                                        <div class="sb-11-data">
                                            <span>$65</span>
                                            <a href="service-details.html"
                                                class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- END SERVICE BOX #1 -->


                    <!-- SERVICE BOX #2 -->
                    <div class="col-md-6">
                        <div class="sbox-11">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-16.jpg') }}"
                                    alt="service-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Meta -->
                                <div class="sbox-11-img-meta white-color">

                                    <!-- Text -->
                                    <div class="sb-11-txt">
                                        <h5 class="h5-lg">Supreme Skicare</h5>
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Organic Sea Salt Scrub (30 min)</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Soothing Skin Body Wrap (40 min)</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Soothing Skin Body Wrap (20 min)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="sbox-11-price">
                                        <div class="sb-11-data">
                                            <span>$119</span>
                                            <a href="service-details.html"
                                                class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- END SERVICE BOX #2 -->


                    <!-- SERVICE BOX #3 -->
                    <div class="col-md-6">
                        <div class="sbox-11">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-19.jpg') }}"
                                    alt="service-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Meta -->
                                <div class="sbox-11-img-meta white-color">

                                    <!-- Text -->
                                    <div class="sb-11-txt">
                                        <h5 class="h5-lg">Hot Stones Massage</h5>
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Organic Sea Salt Scrub (20 min)</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Soothing Skin Body Wrap (50 min)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="sbox-11-price">
                                        <div class="sb-11-data">
                                            <span>$85</span>
                                            <a href="service-details.html"
                                                class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- END SERVICE BOX #3 -->


                    <!-- SERVICE BOX #4 -->
                    <div class="col-md-6">
                        <div class="sbox-11">
                            <div class="hover-overlay">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('/website/assets/images/serv-17.jpg') }}"
                                    alt="service-image" />
                                <div class="item-overlay"></div>

                                <!-- Image Meta -->
                                <div class="sbox-11-img-meta white-color">

                                    <!-- Text -->
                                    <div class="sb-11-txt">
                                        <h5 class="h5-lg">Relaxing Massage</h5>
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Organic Sea Salt Scrub (20 min)</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Soothing Skin Body Wrap (50 min)</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Price -->
                                    <div class="sbox-11-price">
                                        <div class="sb-11-data">
                                            <span>$55</span>
                                            <a href="service-details.html"
                                                class="btn btn-sm btn-tra-white color-02-hover">Read More</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- END SERVICE BOX #4 -->


                </div> <!-- End row -->
            </div> <!-- END SERVICES-11 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END SERVICES-11 -->




    <!-- ABOUT-8
       ============================================= -->
    <section id="about-8" class="bg-fixed bg-01 wide-60 rel about-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Gift Cards</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Experience Life With Color</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-10 offset-xl-1">


                    <!-- ABOUT-8 WRAPPER -->
                    <div class="abox-3-wrapper text-center">
                        <div class="row d-flex align-items-center">


                            <!-- ABOUT BOX #1 -->
                            <div id="a8-1" class="col-md-4">
                                <a href="gift-cards.html">
                                    <div class="abox-4 bg-white">
                                        <div class="abox-4-txt">

                                            <h5 class="h5-sm txt-color-01">Combination Massage</h5>
                                            <span class="txt-color-04">-25%</span>

                                        </div>
                                    </div>
                                </a>
                            </div>


                            <!-- ABOUT BOX #2 -->
                            <div id="a8-2" class="col-md-4">
                                <a href="gift-cards.html">
                                    <div class="abox-4 bg-color-07">
                                        <div class="abox-4-txt">

                                            <h5 class="h5-sm white-color">Deep Tissue Massage</h5>
                                            <span class="white-color">-30%</span>

                                        </div>
                                    </div>
                                </a>
                            </div>


                            <!-- ABOUT BOX #3 -->
                            <div id="a8-3" class="col-md-4">
                                <a href="gift-cards.html">
                                    <div class="abox-4 bg-color-01">
                                        <div class="abox-4-txt">

                                            <h5 class="h5-sm txt-color-01">Aromatherapy Facial</h5>
                                            <span class="txt-color-03">-12%</span>

                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div> <!-- End row -->
                    </div> <!-- END ABOUT-8 WRAPPER -->


                </div>
            </div>


        </div> <!-- End container -->


        <!-- Content Image -->
        <div class="content-img pt-30">
            <div class="ab-img-01"><img class="img-fluid" src="{{ asset('/website/assets/images/ab-img-01.png') }}"
                    alt="content-image"></div>
        </div>


    </section> <!-- END ABOUT-8 -->













    <!-- BLOG-1
       ============================================= -->
    <section id="blog-1" class="bg-color-01 wide-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->
                        <h2 class="tra-header txt-color-02">Our Blog</h2>

                        <!-- Title 	-->
                        <h3 class="h3-xl txt-color-01">Latest News & Events</h3>

                        <!-- Text -->
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo
                            dolor
                            primis libero tempus, blandit a cursus varius at magna tempor
                        </p>

                    </div>
                </div>
            </div>


            <!-- BLOG POSTS HOLDER -->
            <div class="row">


                <!-- BLOG POST #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/blog/img-01.jpg') }}"
                                alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TITLE -->
                        <div class="blog-post-txt">

                            <!-- Post Data -->
                            <span class="txt-color-06">Skincare</span>

                            <!-- Post Title -->
                            <h5 class="h5-sm txt-color-01">
                                <a href="single-post.html">Quaerat neque purus ipsum neque dolor primis libero</a>
                            </h5>

                            <!-- Post Text -->
                            <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus
                                impedit tempor at
                                blandit sapien gravida donec ipsum undo porta justo...
                            </p>

                            <!-- Post Author -->
                            <p class="post-author txt-color-05">Jane Smith - Sep 07, 2020</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #1 -->


                <!-- BLOG POST #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/blog/img-02.jpg') }}"
                                alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Data -->
                            <span class="txt-color-06">Massage Therapy</span>

                            <!-- Post Title -->
                            <h5 class="h5-sm txt-color-01">
                                <a href="single-post.html">Tempor blandit sapien at gravida donec ipsum</a>
                            </h5>

                            <!-- Post Text -->
                            <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus
                                impedit tempor at
                                blandit sapien gravida donec ipsum undo porta justo...
                            </p>

                            <!-- Post Author -->
                            <p class="post-author txt-color-05">Wendy T. - Aug 31, 2020</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #2 -->


                <!-- BLOG POST #3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img">
                            <img class="img-fluid" src="{{ asset('/website/assets/images/blog/img-03.jpg') }}"
                                alt="blog-post-image" />
                        </div>

                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Data -->
                            <span class="txt-color-06">Aromatherapy</span>

                            <!-- Post Title -->
                            <h5 class="h5-sm txt-color-01"><a href="single-post.html">Neque dolor primis a
                                    libero tempus an impedit
                                    tempor</a>
                            </h5>

                            <!-- Post Text -->
                            <p class="txt-color-05">Quaerat neque purus ipsum neque dolor primis libero tempus
                                impedit tempor at
                                blandit sapien gravida donec ipsum undo porta justo...
                            </p>

                            <!-- Post Author -->
                            <p class="post-author txt-color-05">Stacey Richardson - Aug 19, 2020</p>

                        </div>

                    </div>
                </div> <!-- END  BLOG POST #3 -->


            </div> <!-- END BLOG POSTS HOLDER -->


        </div> <!-- End container -->
    </section> <!-- END BLOG-1 -->
@endsection

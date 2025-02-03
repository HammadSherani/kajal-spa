@extends('website.app')
@section('title', 'Service - Kajal SPA')
@section('head')
    {{-- add your meta tags and canonical here --}}
    <meta title="Our Services">
@endsection
@section('content')


<div class="inner-page-wrapper">
    <!-- PAGE HERO
    ============================================= -->	
    <section id="services-page" class="bg-fixed wide-100 page-hero-section division">
        <div class="container">	


            <!-- PAGE HERO TEXT -->
            <div class="row">	
                <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                    <div class="hero-txt text-center white-color">

                        <!-- Title -->
                        <h2 class="h2-lg">Our Services</h2>

                        <!-- Text -->
                        <p class="p-lg">Sapien gravida donec pretium ipsum porta justo integer at feugiat velna vitae auctor 
                           an integera magna purus
                        </p>

                    </div>
                </div>	
            </div>    <!-- END PAGE HERO TEXT -->


            <!-- BREADCRUMB -->
            <div id="breadcrumb">
                <div class="row">						
                    <div class="col">
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                                  </ol>
                            </nav>
                        </div>
                    </div>
                </div> 
            </div>	<!-- END BREADCRUMB -->


        </div>	   <!-- End container --> 
    </section>	<!-- END PAGE HERO -->




    <!-- SERVICES-3
    ============================================= -->
    <section id="services-3" class="bg-color-01 wide-70 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->	
            <div class="row">	
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">	

                        <!-- Transparent Header -->	
                        <h2 class="tra-header txt-color-02">Our Services</h2>	

                        <!-- Title 	-->	
                        <h3 class="h3-xl txt-color-01">The Art Of Natural Beauty</h3>		

                        <!-- Text -->	
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
                           primis libero tempus, blandit a cursus varius at magna tempor
                        </p>
                            
                    </div>	
                </div>
            </div>
            

            <!-- SERVICES-3 WRAPPER -->
             <div class="sbox-3-wrapper">
                <div class="row">


                    <!-- SERVICE BOX #1 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-04.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Massage Therapy</a></h5>

                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #2 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-05.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt txt-color-05">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Skin Care</a></h5>
                                
                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #3 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-06.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt txt-color-05">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Body Treatments</a></h5>
                                
                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #4 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-07.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt txt-color-05">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Aromatherapy</a></h5>
                                
                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #5 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-08.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt txt-color-05">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Hydrotherapy</a></h5>
                                
                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- SERVICE BOX #6 -->		
                    <div class="col-md-6 col-lg-4">
                        <div class="sbox-3 bg-white">

                            <!-- Image -->
                            <div class="sbox-3-img">
                                <div class="hover-overlay"> 
                                    <img class="img-fluid" src="{{ asset('website/assets/images/serv-09.jpg') }}" alt="service-image">

                                </div>
                            </div>

                            <!-- Text -->
                            <div class="sbox-3-txt txt-color-05">

                                <!-- Link -->
                                <h5 class="h5-md txt-color-01"><a href="#">Herbal Care</a></h5>
                                
                                <!-- Text -->	
                                <p class="txt-color-05">Augue luctus neque purus an ipsum neque dolor primis libero tempus at blandit 
                                   at purus venenatis
                                </p>

                                <!-- Link -->	
                                <div class="sbox-3-link">
                                    <a href="service-details.html" class="btn btn-tra-01 color-02-hover">Read More</a>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>  <!-- End row -->	
             </div>	<!-- END SERVICES-3 WRAPPER -->


        </div>	   <!-- End container -->
    </section>	<!-- END SERVICES-3 -->




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
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
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


                        </div>  <!-- End row -->	
                     </div>	<!-- END ABOUT-8 WRAPPER -->


                 </div>
            </div>


        </div>	   <!-- End container -->


        <!-- Content Image -->
        <div class="content-img pt-30">
            <div class="ab-img-01"><img class="img-fluid" src="{{ asset('website/assets/images/ab-img-01.png') }}" alt="content-image">
            </div>
        </div>

        
    </section>	<!-- END ABOUT-8 -->




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
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
                           primis libero tempus, blandit a cursus varius at magna tempor
                        </p>
                            
                    </div>	
                </div>
            </div>


            <!-- ABOUT IMAGE -->
            <div class="row">	
                 <div class="col-md-12">
                    <div class="img-block">
                        <img class="img-fluid" src="{{ asset('website/assets/images/image-12.jpg') }}" alt="about-image">

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
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
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
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
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
                                <p class="txt-color-05">Congue augue egestas magna volutpat dictum suscipit ipsum egestas magna vitae purus</p>
                            </div>

                        </div>
                    </div>


                </div>  <!-- End row --> 
            </div>	  <!-- END ABOUT BOXES WRAPPER -->


        </div>	   <!-- End container -->
    </section>	<!-- END ABOUT-3 -->




    <!-- SERVICES-16
    ============================================= -->
    <section id="services-16" class="bg-color-01 pb-80 services-section division">
        <div class="container">


            <!-- SECTION TITLE -->	
            <div class="row">	
                <div class="col-lg-10 offset-lg-1">
                    <div class="section-title mb-60 text-center">

                        <!-- Transparent Header -->	
                        <h2 class="tra-header txt-color-02">Experience</h2>	

                        <!-- Title 	-->	
                        <h3 class="h3-xl txt-color-01">Feel Natural, Be Natural</h3>	

                        <!-- Text -->	
                        <p class="p-lg txt-color-05">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor 
                           primis libero tempus, blandit a cursus varius at magna tempor
                        </p>
                            
                    </div>	
                </div>
            </div>


            <div class="row">	
                <div class="col-md-12 gallery-items-list">
                    <div class="masonry-wrap grid-loaded" style="position: relative; height: 565.922px;">


                        <!-- SERVICE BOX #1 -->
                          <div class="masonry-item sbox-16" style="position: absolute; left: 0%; top: 0px;">
                            <div class="hover-overlay"> 

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('website/assets/images/serv-20.jpg') }}" alt="service-image">

                                <div class="sbox-16-overlay"></div>		

                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Hot Stones Therapy</h5>		
                                        <p class="p-lg">SPA &amp; Massage Therapy</p>
                                        <a href="service-details.html" class="btn btn-color-02 tra-white-hover">Find Out More</a>
                                    </div>																									 
                                </div> 

                            </div>
                        </div>	<!-- END SERVICE BOX #1 -->	


                        <!-- SERVICE BOX #2 -->
                          <div class="masonry-item sbox-16" style="position: absolute; left: 33.3291%; top: 0px;">
                            <div class="hover-overlay"> 

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('website/assets/images/serv-13.jpg') }}" alt="gallery-image">
	
                                <div class="sbox-16-overlay"></div>							
                                
                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Relaxing Massage</h5>		
                                        <p class="p-lg">SPA &amp; Wellness</p>	
                                    </div>																									 
                                </div> 

                            </div>
                        </div>	<!-- END SERVICE BOX #2 -->	


                        <!-- SERVICE BOX #3 -->
                          <div class="masonry-item sbox-16" style="position: absolute; left: 66.6582%; top: 0px;">
                            <div class="hover-overlay"> 

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('website/assets/images/serv-21.jpg') }}" alt="gallery-image">

                                <div class="sbox-16-overlay"></div>							
                                
                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Supreme Skincare</h5>		
                                        <p class="p-lg">Aroma &amp; Skin Care</p>
                                        <a href="service-details.html" class="btn btn-color-02 tra-white-hover">Find Out More</a>	
                                    </div>																									
                                </div> 

                            </div>
                        </div>	<!-- END SERVICE BOX #3 -->	


                        <!-- SERVICE BOX #4 -->
                          <div class="masonry-item sbox-16" style="position: absolute; left: 33.3291%; top: 282.453px;">
                            <div class="hover-overlay"> 

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('website/assets/images/serv-16.jpg') }}" alt="gallery-image">

                                <div class="sbox-16-overlay"></div>								
                                
                                <!-- Image Description -->
                                <div class="sbox-16-img-meta white-color">
                                    <div class="sbox-16-txt">
                                        <h5 class="h5-md">Herbal Care</h5>		
                                        <p class="p-lg">SPA &amp; Aromatherapy</p>	
                                    </div>																							
                                </div> 

                            </div>
                        </div>	<!-- END SERVICE BOX #4 -->


                    </div>
                </div>	
            </div>
         </div>	   <!-- End container -->	
    </section>	<!-- END SERVICES-16 -->




    <!-- BANNER-5
    ============================================= -->
    <section id="banner-5" class="bg-fixed bg-image banner-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->	
                <div class="col-lg-6 offset-lg-3">
                    <div class="banner-5-txt text-center">

                        <!-- Title -->	
                        <h2 class="h2-xl txt-color-05">Get 20% Off</h2>
                        <h3 class="h3-xs txt-color-01">For Your First Visit</h3>

                        <!-- Text -->
                        <p class="p-md txt-color-05">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor an tempus 
                           feugiat dolor undo lacinia cubilia curae
                        </p>

                        <!-- Button -->	
                        <a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a>

                    </div>
                </div>	<!-- END TEXT BLOCK -->	

            </div>	  <!-- End row -->	
        </div>	   <!-- End container -->
    </section>	<!-- END BANNER-5 -->
</div>

@endsection
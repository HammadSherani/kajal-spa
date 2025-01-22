@include('website/attachments/head')
@include('website/attachments/headerTwo')
<div class="inner-page-wrapper">
    <section id="blogs-page" class="bg-fixed wide-100 page-hero-section division">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                    <div class="hero-txt text-center white-color">
                        <h2 class="h2-lg">Latest News & Events</h2>
                        <p class="p-lg">Discover the art of relaxation and self-care through our spa blog. Explore expert tips, wellness advice, and the latest trends in spa treatments
                        </p>
                    </div>
                </div>
            </div>
            <div id="breadcrumb">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog-1" class="bg-color-01 wide-60 blog-section division">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-post">
                            <a href="/blog/{{ $blog->slug }}">
                                <div class="blog-post-img">
                                    <img class="img-fluid" src="{{ asset($blog->banner) }}"
                                        alt="blog-post-image" />
                                </div>
                                <div class="blog-post-txt">
                                    <span class="txt-color-06">
                                        <a href="/blog/{{ $blog->slug }}" class="fw-bold" style="color: #efa697 !important; font-weight: 700 !important; ">
                                            {{ $blog->title }}
                                        </a>
                                    </span>
                                    <p class="txt-color-05">{{ Str::words(strip_tags($blog->description), 20, '...') }}
                                    </p>
                                    <p class="post-author txt-color-05">{{ $blog->created_at->format('d M, Y') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach







            </div> <!-- END BLOG POSTS HOLDER -->


        </div> <!-- End container -->
    </section> <!-- END BLOG-1 -->




    <!-- PAGE PAGINATION
    ============================================= -->
    <div class="bg-color-01 page-pagination division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i
                                        class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span
                                        class="sr-only">(current)</span></a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>

                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END PAGE PAGINATION -->




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
                        <p class="p-md txt-color-05">Experience ultimate relaxation and rejuvenation at our spa. Indulge in luxurious treatments designed to revitalize your mind, body, and soul.
                        </p>

                        <!-- Button -->
                        {{-- <a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a> --}}

                    </div>
                </div> <!-- END TEXT BLOCK -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END BANNER-5 -->
</div> <!-- END INNER PAGE WRAPPER -->


@include('website/attachments/footer')
@include('website/attachments/foot')

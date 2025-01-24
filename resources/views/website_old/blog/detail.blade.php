@extends('website.app')
@section('title', $blog->title)
@section('meta')
    <meta name="author" content="Kajal-spa" />
    <meta name="cannonical" content="{{$blog->cannonical_url}}" />
    <meta name="title" content="{{$blog->title}}" />
    <meta name="description" content="{{$blog->meta_description}}" />
    <meta name="keywords"
        content="{{$blog->meta_keywords}}">
@endsection
@section('section')
    <div class="inner-page-wrapper">
        <section id="single-post-page" class="bg-fixed wide-100 page-hero-section division">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <div class="hero-txt text-center white-color">
                            <h2 class="h2-lg">{{ $blog->title }}</h2>
                        </div>
                    </div>
                </div>
                <div id="breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-nav">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="single-post" class="bg-color-01 wide-90 blog-page-section division">
            <div class="container">
                <div class="row">


                    <!-- POST CONTENT -->
                    <div class="col-lg-8">
                        <div class="single-blog-post pr-30">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <img class="img-fluid" src="{{ asset($blog->banner) }}" alt="blog-post-image">
                            </div>


                            <!-- SINGLE POST TITLE -->
                            <div class="single-post-title">

                                <!-- Post Data -->
                                <span class="txt-color-06">Skincare</span>

                                <!-- Post Title -->
                                <h5 class="h5-xl txt-color-01">{{ $blog->title }}</h5>

                                <!-- Post Author -->
                                <p class="post-author txt-color-01">{{ $blog->created_at->format('d M, Y') }}</p>

                            </div>

                            <!-- POST TEXT -->
                            <div class="single-post-txt">
                                {!! $blog->content !!}
                            </div> <!-- END POST TEXT -->


                            <!-- SINGLE POST SHARE LINKS -->
                            <div class="row post-share-links d-flex align-items-center">

                                <!-- POST TAGS -->
                                {{-- <div class="col-md-9 col-xl-8 post-tags-list">
                                <span><a href="#">Massage</a></span>	
                                <span><a href="#">Spa</a></span>
                                <span><a href="#">Relax</a></span>	
                                <span><a href="#">Wellness</a></span>										
                            </div> --}}

                                <!-- POST SHARE ICONS -->
                                {{-- <div class="col-md-3 col-xl-4 post-share-list text-right">
                                <ul class="share-social-icons text-center clearfix txt-color-05">											
                                    <li><a href="#" class="share-ico ico-facebook"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#" class="share-ico ico-twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="share-ico ico-like"><i class="far fa-bookmark"></i></a></li>			
                                </ul>
                            </div> --}}

                            </div> <!-- END SINGLE POST SHARE -->


                            {{-- <div class="author-senoff d-flex align-items-center">
                            <img src="/website/assets/images/review-author-4.jpg" alt="author-avatar">
                            <div class="author-senoff-txt">
                                <p class="p-md txt-color-03">Published by</p>
                                <h5 class="h5-xs txt-color-01">Jessica Pead</h5>
                                <p class="txt-color-05">Lorem ipsum dolor sit amet, consectetur elit eiusmod tempor at sapien dolore 
                                   and incidide undo labore dolore incididunt and labore turpis vitae raesent varius efficitur ipsum 
                                   primis cubilia laoreet augue egestas
                                </p>
                                <div class="author-follow-btn"><a href="#">Follow</a></div>
                            </div>

                        </div>	 --}}


                            <!-- OTHER POSTS -->
                            <div class="other-posts" style="margin-top: 50px">
                                <h5 class="h5-lg txt-color-01">Related Posts</h5>
                                <div class="row">
                                    @foreach ($relatedBlog as $relatedBlog)
                                        <div class="col-md-6">
                                            <div class="blog-post">
                                                <a href="/blog/{{ $relatedBlog->slug }}">
                                                    <div class="blog-post-img">
                                                        <img class="img-fluid" src="{{ asset($relatedBlog->banner) }}"
                                                            alt="blog-post-image" />
                                                    </div>
                                                    <div class="blog-post-txt">
                                                        <span class="txt-color-06">
                                                            <a href="/blog/{{ $relatedBlog->slug }}" class="fw-bold"
                                                                style="color: #efa697 !important; font-weight: 700 !important; ">
                                                                {{ htmlspecialchars($relatedBlog->title) }}
                                                            </a>
                                                        </span>
                                                        <p class="txt-color-05">
                                                            {{ Str::words(strip_tags($relatedBlog->description), 12, '...') }}
                                                        </p>
                                                        <p class="post-author txt-color-05">
                                                            {{ $relatedBlog->created_at->format('d M, Y') }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div> <!-- END OTHER POSTS -->
                        </div>
                    </div> <!-- END POST CONTENT -->


                    <!-- SIDEBAR -->
                    <aside id="sidebar" class="col-lg-4">
                        <!-- POPULAR POSTS -->
                        <div class="popular-posts sidebar-div mb-50">

                            <!-- Title -->
                            <h5 class="h5-sm txt-color-01">Popular Posts</h5>

                            <ul class="popular-posts">

                                @foreach ($popularBlog as $popularBlog)
                                    <li class="clearfix d-flex align-items-center">

                                        <!-- Image -->
                                        <img class="img-fluid" src={{ asset($popularBlog->banner) }}
                                            alt="blog-post-preview">

                                        <!-- Text -->
                                        <div class="post-summary">
                                            <a href="/blog/{{ $relatedBlog->slug }}"
                                                class="txt-color-05">{{ $popularBlog->title }}</a>
                                        </div>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- TAGS CLOUD -->
                        {{-- <div class="tags-cloud sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-sm txt-color-01">Tags Cloud</h5>

                        <span class="badge"><a href="#">Massage</a></span>
                        <span class="badge"><a href="#">Treatments</a></span>
                        <span class="badge"><a href="#">Balance</a></span>
                        <span class="badge"><a href="#">Aromatherapy</a></span>
                        <span class="badge"><a href="#">Spa</a></span>
                        <span class="badge"><a href="#">Hydrotherapy</a></span>
                        <span class="badge"><a href="#">Herbal</a></span>
                        <span class="badge"><a href="#">Relax</a></span>
                        <span class="badge"><a href="#">Wellness</a></span>

                    </div> --}}
                    </aside> <!-- END SIDEBAR -->
                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END SINGLE POST -->




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
                            <p class="p-md txt-color-05">Porta semper lacus cursus, feugiat primis ultrice ligula risus
                                auctor an tempus
                                feugiat dolor undo lacinia cubilia curae
                            </p>

                            <!-- Button -->
                            <a href="booking.html" class="btn btn-md btn-color-02 color-01-hover">Book Now</a>

                        </div>
                    </div> <!-- END TEXT BLOCK -->

                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END BANNER-5 -->

    </div>
@endsection

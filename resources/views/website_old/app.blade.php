<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')

    <!-- SITE TITLE -->
    <title>Kajal Spa - @yield('title', 'Spa, Hair & Beauty Salon')</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="/website/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/website/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="/website/assets/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/website/assets/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/website/assets/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="/website/assets/images/apple-touch-icon.png">
    <link rel="icon" href="/website/assets/images/apple-touch-icon.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Lustria&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="/website/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="../../../../../use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="/website/assets/css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="/website/assets/css/menu.css" rel="stylesheet">
    <link id="effect" href="/website/assets/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="/website/assets/css/tweenmax.css" rel="stylesheet">
    <link href="/website/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/website/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/website/assets/css/flexslider.css" rel="stylesheet">
    <link href="/website/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="/website/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="/website/assets/css/pink-theme.css" rel="stylesheet">

    <!-- Style Switcher CSS -->
    <link href="/website/assets/css/rose-theme.css" rel="alternate stylesheet" title="rose-theme">
    <link href="/website/assets/css/silk-theme.css" rel="alternate stylesheet" title="silk-theme">
    <link href="/website/assets/css/gold-theme.css" rel="alternate stylesheet" title="gold-theme">

    <!-- RESPONSIVE CSS -->
    <link href="/website/assets/css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- PRELOADER SPINNER
  ============================================= -->
    <div id="loader-wrapper">
        <div id="loading">
            <div class="cssload-loader">
                <div class="fancy-spinner">
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div>



    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">
        @include('website.attachments.headerTwo')
        @yield('section')
        @include('website.attachments.footer')
    </div> <!-- END PAGE CONTENT -->
    <script src="/website/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/website/assets/js/bootstrap.min.js"></script>
    <script src="/website/assets/js/modernizr.custom.js"></script>
    <script src="/website/assets/js/jquery.easing.js"></script>
    <script src="/website/assets/js/jquery.appear.js"></script>
    <script src="/website/assets/js/jquery.scrollto.js"></script>
    <script src="/website/assets/js/menu.js"></script>
    <script src="/website/assets/js/materialize.js"></script>
    <script src="/website/assets/js/tweenmax.min.js"></script>
    <script src="/website/assets/js/slideshow.js"></script>
    <script src="/website/assets/js/jquery.vide.min.js"></script>
    <script src="/website/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/website/assets/js/isotope.pkgd.min.js"></script>
    <script src="/website/assets/js/jquery.flexslider.js"></script>
    <script src="/website/assets/js/owl.carousel.min.js"></script>
    <script src="/website/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/website/assets/js/hero-form.js"></script>
    <script src="/website/assets/js/contact-form.js"></script>
    <script src="/website/assets/js/comment-form.js"></script>
    <script src="/website/assets/js/booking-form.js"></script>
    <script src="/website/assets/js/jquery.datetimepicker.full.js"></script>
    <script src="/website/assets/js/jquery.validate.min.js"></script>
    <script src="/website/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Custom Script -->
    <script src="/website/assets/js/custom.js"></script>

    <script>
        $('.video-play').vide("images/video/video", {
            posterType: "jpg"
        });
    </script>

    <script src="/website/assets/js/changer.js"></script>
    <script defer src="/website/assets/js/styleswitch.js"></script>

</body>

</html>

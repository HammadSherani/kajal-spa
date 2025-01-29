<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('/website/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/website/assets/css/pink-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/website/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('/website/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/website/assets/css/menu.css') }}" rel="stylesheet">
</head>

<body>
    @include('website.layout.header')
    @yield('content')
    @include('website.layout.footer')




    <!-- EXTERNAL SCRIPTS
============================================= -->
<script src="{{ asset('website/assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/assets/js/menu.js') }}"></script>
<script src="{{ asset('website/assets/js/materialize.js') }}"></script>
<script src="{{ asset('website/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('website/assets/js/hero-form.js') }}"></script>
<script src="{{ asset('website/assets/js/contact-form.js') }}"></script>
<script src="{{ asset('website/assets/js/comment-form.js') }}"></script>
<script src="{{ asset('website/assets/js/booking-form.js') }}"></script>

<!-- Custom Script -->
<script src="{{asset("/website/assets/js/custom.js")}}"></script>

</body>

</html>

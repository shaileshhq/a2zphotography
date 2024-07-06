<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Best Photographers in Varanasi | Professional photographer in varanasi</title>
        <meta name="keywords" content="Wedding Photographers In Varanasi, Wedding Photography Studio, Best Photo Studio, Top Candid Photographer, Pre-wedding Shoot, Cinematic Wedding Cinematography,newborn Photography Service, Drone Photography Services, Book Now And Enjoy" />
        <meta name="description" content="As The Most Affordable Photographers In Varanasi, We Capture The Moments Of Everyday Life And Cultural Traditions Of Varanasi. Check Our Work Here." />
        <link rel="icon" href="{{ asset('frontend_css/assets/images/sm-logo.svg') }}" type="image/gif" sizes="20x20">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_css/assets/css/style.css') }}">
    </head>
<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">

<!-- <div class="preloader">
<div class="counter">0</div>
</div> -->


<!-- Start header -->
@include('frontend/include/header')
<!-- End header -->


<div class="inner-page-banner">
<div class="container">
<div class="row justify-content-center align-items-center text-center">
<div class="col-md-6">
<div class="banner-content">
<h1>Gallery</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb gap-3">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Gallery</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>


<div class="portfolio-details-pages pt-120 mb-120">
<div class="container position-relative">
<div class="row g-4 justify-content-center">
@foreach ($gallery as $item)
<div class="col-lg-4 col-sm-6 col-12">
<a href="public/gallery/{{$item->image}}" class="portfolio-img" data-fancybox="gallery">
<img class="img-fluid" src="public/gallery/{{$item->image}}" alt="image">
</a>
</div>
@endforeach
</div>
</div>
</div>


<!-- main-footer -->
@include('frontend/include/footer')
<!-- main-footer end -->

</div>
</div>
<script src="{{ asset('frontend_css/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/scrollToPlugin.html') }}"></script>
<script src="{{ asset('frontend_css/assets/js/sidebar.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/simpleParallax.min.js') }}"></script>
<script src="{{ asset('frontend_css/assets/js/main.js') }}"></script>
</body>
</html>

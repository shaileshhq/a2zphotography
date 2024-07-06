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
    <!-- Start header --> @include('frontend/include/header')
    <!-- End header -->
    <div class="inner-page-banner">
      <div class="container">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-10">
            <div class="banner-content">
              <h1>Portfolio Details</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb gap-3">
                  <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Portfolio Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-details-pages pt-120 mb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title">
              <h3>Welcome to Our Wedding Photo Gallery</h3>
              <p>Welcome to Our Wedding Photo Gallery We have a beautiful and spacious photo studio. This is ideal for photographing pack shots, paintings, products or people. Different backgrounds are available, daylight comes in sideways and there is an extensive flash installation.</p>
            </div>
          </div>
        </div>
        <div class="row g-4"> @foreach(explode(',',$product_detail->gallery_image) as $image) <div class="col-lg-4 col-sm-6 col-12">
            <a href="{{uploaded_asset($image)}}" class="portfolio-img" data-fancybox="gallery">
              <img class="img-fluid" src="{{uploaded_asset($image)}}" alt="image">
            </a>
          </div> @endforeach </div>
      </div>
    </div>
    {{--<div class="home1-booking-area mb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="booking-wraper">
              <div class="row">
                <div class="col-12">
                  <div class="section-title1 text-center">
                    <h2>Booking</h2>
                    <p>As Vintage decided to have a closer look into fast-paced New York web design realm in.</p>
                  </div>
                </div>
              </div>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-inner">
                      <label>Your Name (required)</label>
                      <input type="text" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-inner">
                      <label>Your Phone (required)</label>
                      <input type="number" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-inner">
                      <label>Your E-mail (required)</label>
                      <input type="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-inner date">
                      <label>Booking Date</label>
                      <input autocomplete="off" placeholder="" type="text" name="checkIn" id="datepicker" class="claender">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-inner">
                      <label>Type Your Message</label>
                      <textarea></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 d-flex justify-content-center pt-20">
                    <div class="form-inner send-btn">
                      <button class="primary-btn3 button-hover-two" type="submit">Send Now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- main-footer --> @include('frontend/include/footer')
    <!-- main-footer end -->
    </div>
    </div>
    <script src="{{ asset('frontend_css/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/scrollToPlugin.html') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('frontend_css/assets/js/main.js') }}"></script>
  </body>
</html>

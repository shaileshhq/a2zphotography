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
    <!-- Start header -->
     @include('frontend/include/header')
    <!-- End header -->
    <div class="inner-page-banner">
      <div class="container">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-10">
            <div class="banner-content">
              <h1>Blog Details</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb gap-3">
                  <li class="breadcrumb-item">
                    <a href="/">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="inner-blog pt-120 mb-120">
      <div class="container">
        <div class="row g-lg-5 g-4 justify-content-center">
          <div class="col-lg-8">
            <div class="blog-details-area">
              <div class="post-thumbnail">
                <img class="img-fluid" src="../public/blog/{{($blog_detail->image)}}" alt="image">
              </div>
              <div class="blog-publisher-meta-title d-flex align-items-center">
                <div class="publish-date">
                  <span>{{date('d M, Y',strtotime($blog_detail->blog_date))}}</span>
                </div>
                <div class="title-meta">
                  <div class="post-title">
                    <h3>{{($blog_detail->title)}}</h3>
                  </div>
                </div>
              </div>
              <p>{{($blog_detail->description)}}</p>
              <blockquote class="wp-block-quote">
                <div class="quage-icon">
                  <img src="{{ asset('frontend_css/assets/images/icons/quote-1.svg')}}" alt="image">
                </div>
                <p>{{($blog_detail->short_desc)}}</p>
                <cite> Wedding Photography in Varanasi </cite>
              </blockquote>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="widget-area">
              <div class="single-widgets widget_egns_recent_post">
                <div class="widget-title">
                  <h3>Newest Posts</h3>
                </div>
                <div class="recent-post-wraper">
                @foreach ($blog as $item)
                  <div class="widget-cnt">
                    <div class="wi">
                      <a href="#">
                        <img src="../public/blog/{{($item->image)}}" alt="image" style="width:100px;">
                      </a>
                    </div>
                    <div class="wc">
                      <h6>
                        <a href="#">{{($item->title)}}</a>
                      </h6>
                      <span>{{date('d M, Y',strtotime($item->blog_date))}}</span>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- main-footer --> @include('frontend/include/footer')
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

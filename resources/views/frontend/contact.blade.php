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
                <div class="col-md-6">
                    <div class="banner-content">
                        <h1>Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb gap-3">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-me-area pt-120 mb-120">
        <div class="container">
            <div class="row gy-5 justify-content-center align-items-center mb-120">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="number-of-comment">
                            <h5>Get a Message</h5>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('enquiry.store') }}" class="default-form">
                            @csrf
                            <div class="form-inner">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-inner">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="Enter Your Phone" required>
                            </div>
                            <div class="form-inner date">
                                <label>Booking Date</label>
                                <input autocomplete="off" placeholder type="text" name="checkIn" id="datepicker"
                                    class="claender">
                            </div>
                            <div class="form-inner">
                                <label>Message</label>
                                <textarea placeholder="Enter Your Email" name="message"></textarea>
                            </div>
                            <div class="form-inner two">
                                <button class="primary-btn3 button-hover-two" type="submit">Enquiry Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-left">
                        <h3>Contact Me</h3>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="content">
                                    <h6><a href="#">Deura, Kashipur, Varanasi, Uttar Pradesh, India <br>(221311)</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="tel:9454528015">+91-9454528015</a>
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="bi bi-chat-left-text-fill"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="mailto:a2zphotographyyy@gmail.com">a2zphotographyyy@gmail.com</a>
                                    </h6>
                                    <h6>
                                        <a href="mailto:contact@a2zphotography.in">contact@a2zphotography.in</a>
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="location-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.09799766632!2d82.90870658618162!3d25.320894920622468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b5!2sVaranasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1682245184841!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-3 row align-items-center g-4">
                <div class="col-md-6">
                    <div class="join-us-title">
                        <h3>Join us on Social Media!</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="social-icon">
                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
                        <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                    </ul>
                </div>
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

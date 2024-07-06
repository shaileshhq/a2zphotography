<div id="magic-cursor">
<div id="ball"></div>
</div>
<div id="smooth-wrapper">
<div id="smooth-content">

<div class="circle-container">
<svg class="circle-progress svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg>
</div>

<div id="smooth-wrapper">
<div id="smooth-content">


<div class="circle-container">
<svg class="circle-progress svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
</svg>
</div>

<header class="header-area style-1 header-transparent">
<div class="header-logo">
<a href="{{route('index')}}"><img alt="image" src="{{ asset('frontend_css/assets/images/logo.png')}}"></a>
</div>
<div class="main-menu">
<div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
<div class="mobile-logo-wrap ">
<a href="{{route('index')}}"><img alt="image" src="{{ asset('frontend_css/assets/images/logo.png')}}"></a>
</div>
<div class="menu-close-btn">
<i class="bi bi-x-lg"></i>
</div>
</div>
<ul class="menu-list">
<li class="menu-item-has-children">
<a href="{{route('index')}}" class="btn--primary1">Home</a>
</li>
<li class="menu-item-has-children">
<a href="{{route('about')}}" class="btn--primary1">About</a>
</li>
<li class="menu-item-has-children">
<a href="{{route('services')}}" class="btn--primary1">Services</a>
</li>
<li class="menu-item-has-children">
<a href="#" class="btn--primary1">Our Portfolio</a><i class='bx bxs-circle dropdown-icon'></i>
<ul class="submenu">
@php
$cat_title=App\Models\ProductCategory::where('delete_status',0)->orderBy('id', 'ASC')->get();
@endphp
@foreach ($cat_title as $key => $items)
<li><a href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></li>
@endforeach

</ul>
</li>
<li class="menu-item-has-children">
    <a href="{{route('gallery')}}" class="btn--primary1">Gallery</a>
    </li>
<li class="menu-item-has-children">
<a href="{{route('blog')}}" class="btn--primary1">Blog</a>
</li>

<li class="menu-item-has-children">
<a href="{{route('contact')}}" class="btn--primary1">Contact</a>
</li>
</ul>
</div>
<div class="nav-right d-flex align-items-center">

<div class="side-icon">
<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
<path d="M0.421875 5.12308C0.134766 5.30769 0 5.58462 0 5.99077C0 6.39692 0.146484 6.67385 0.46875 6.87077L0.673828 7H15H29.3262L29.5312 6.87077C29.8535 6.67385 30 6.39692 30 5.99077C30 5.58462 29.8652 5.30769 29.5781 5.12308C29.3848 5 29.25 5 15 5C0.75 5 0.615234 5 0.421875 5.12308Z" />
<path d="M0.421875 14.125C0.140625 14.3125 0 14.5938 0 15C0 15.4062 0.140625 15.6875 0.421875 15.875C0.615234 16 0.75 16 15 16C29.25 16 29.3848 16 29.5781 15.875C29.8594 15.6875 30 15.4062 30 15C30 14.5938 29.8594 14.3125 29.5781 14.125C29.3848 14 29.25 14 15 14C0.75 14 0.615234 14 0.421875 14.125Z" />
<path d="M0.723529 23.0428C0.252941 23.159 0 23.5015 0 24.0214C0 24.419 0.141176 24.6942 0.423529 24.8777C0.611765 25 0.735294 25 8 25C15.2647 25 15.3882 25 15.5765 24.8777C15.8647 24.6942 16 24.419 16 24.0153C16 23.6116 15.8529 23.3364 15.5294 23.1407C15.3235 23.0122 15.2706 23.0122 8.11765 23C4.15294 23 0.823529 23.0122 0.723529 23.0428Z" />
</svg>
</div>
</div>
</header>

<div class="main-nav-wrapper">
<div class="main-nav">
<div class="menu-close-btn" id="menu-close-btn"><i class="bi bi-x-lg"></i></div>
<div class="mobile-logo-area d-flex justify-content-start align-items-center">
<div class="header-logo">
<a href="index.html"><img alt="image" class="img-fluid" src="{{ asset('frontend_css/assets/images/logo.png')}}"></a>
</div>
</div>
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6 px-0">
<div class="sidebar-menu-area">
<ul class="menu-list">
<li class="menu-item-has-children menu-item">
<a href="{{route('index')}}" class="drop-down" data-hover='Home'>Home</a></i>
</li>
<li class="menu-item-has-children menu-item">
<a href="{{route('about')}}" class="drop-down" data-hover='About'>About</a>
</li>
<li class="menu-item-has-children menu-item">
<a href="{{route('services')}}" class="drop-down" data-hover='Services'>Services</a>
</li>
<li class="menu-item-has-children menu-item">
<a href="#" data-hover='Our Portfolio'>Our Portfolio</a><i class='bi bi-plus-lg dropdown-icon'></i>
<ul class="sub-menu">
@php
$cat_title=App\Models\ProductCategory::where('delete_status',0)->orderBy('id', 'ASC')->get();
@endphp
@foreach ($cat_title as $key => $items)
<li><a href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></li>
@endforeach
</ul>
</li>


<li class="menu-item-has-children menu-item">
<a href="{{route('contact')}}" class="drop-down" data-hover='Contact'> Contact </a>
</li>
</ul>
</div>
</div>
<div class="col-lg-6">
<ul class="nav-contact-list">
<li class="citem">
<h6>PHONE:</h6>
<a href="tel:+91-9454528015">+91-9454528015</a>
</li>
<li class="citem">
<h6>ADDRESS:</h6>
<p>Varanasi, Uttar Pradesh, India (221311)</p>
</li>
<li class="citem">
<h6>E-mail</h6>
<a href="mailto:a2zphotographyyy@gmail.com"><span>a2zphotographyyy@gmail.com</span></a>
</li>
<li class="citem">
<h6>FOLLOW US:</h6>
<ul class="social-icon">
    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
    <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
 </ul>
</li>
</ul>
</div>
</div>
</div>
<span></span>
</div>
</div>

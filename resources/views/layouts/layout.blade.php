<!DOCTYPE html>
<html lang="en">
<head>
    <title>LERAMIZ - Landing Page Template</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="LERAMIZ Landing Page Template">
    <meta name="keywords" content="LERAMIZ, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/logo.png')}}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <script src="{{asset('js/dropzone.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 header-top-left">
                    <div class="top-info">
                        <i class="fa fa-phone"></i>
                        (+88) 666 121 4321
                    </div>
                    <div class="top-info">
                        <i class="fa fa-envelope"></i>
                        info.leramiz@colorlib.com
                    </div>
                </div>
                <div class="col-lg-6 text-lg-right header-top-right">
                    <div class="top-social">
                        <a href="https://www.facebook.com/muhammadessam95"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/Muhammed_essam9"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/muhammad-essam-022a53b8/"><i
                                class="fa fa-linkedin"></i></a>
                    </div>
                    @if(!Auth::check())
                        <div class="user-panel">
                            <a href="/register"><i class="fa fa-user-circle-o"></i> Register</a>
                            <a href="/login"><i class="fa fa-sign-in"></i> Login</a>
                        </div>
                    @else
                        <div class="user-panel">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-light"><i class="fa fa-user-circle-o"></i>Logout
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="site-navbar">
                    <a href="/" class="site-logo"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    <div class="nav-switch">
                        <i class="fa fa-bars"></i>
                    </div>
                    <ul class="main-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/flyers">FEATURED LISTING</a></li>
                        <li><a href="/about">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="page-top-section set-bg" data-setbg="{{asset('img/page-top-bg.jpg')}}">
    <div class="container text-white">
    </div>

</section>

<div class="site-breadcrumb">
    <div class="container">
    </div>
</div>
<section class="page-section blog-page">

    <div class="container" id="app">
        @yield('content')
    </div>
</section>
<footer class="footer-section set-bg" data-setbg="{{asset('img/footer-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-widget">
                <img src="{{asset('img/logo.png')}}" alt="">
                <p>Lorem ipsum dolo sit azmet, consecter dipise consult elit. Maecenas mamus antesme non anean a dolor
                    sample tempor nuncest erat.</p>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="contact-widget">
                    <h5 class="fw-title">CONTACT US</h5>
                    <p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
                    <p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
                    <p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
                    <p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-widget">
                <div class="double-menu-widget">
                    <h5 class="fw-title">POPULAR PLACES</h5>
                    <ul>
                        <li><a href="">Florida</a></li>
                        <li><a href="">New York</a></li>
                        <li><a href="">Washington</a></li>
                        <li><a href="">Los Angeles</a></li>
                        <li><a href="">Chicago</a></li>
                    </ul>
                    <ul>
                        <li><a href="">St Louis</a></li>
                        <li><a href="">Jacksonville</a></li>
                        <li><a href="">San Jose</a></li>
                        <li><a href="">San Diego</a></li>
                        <li><a href="">Houston</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  footer-widget">
                <div class="newslatter-widget">
                    <h5 class="fw-title">NEWSLETTER</h5>
                    <p>Subscribe your email to get the latest news and new offer also discount</p>
                    <form class="footer-newslatter-form">
                        <input type="text" placeholder="Email address">
                        <button><i class="fa fa-send"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<link rel="stylesheet" href="{{asset('css/dropzone.min.css')}}">
<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@include('sweetalert::alert')

</body>
</html>

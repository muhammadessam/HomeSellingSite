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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


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
                                <button type="submit" class="btn btn-outline-light"><i class="fa fa-user-circle-o"></i>Logout</button>
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

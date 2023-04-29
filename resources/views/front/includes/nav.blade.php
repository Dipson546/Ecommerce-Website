<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <title>Olanep Fashion Pvt.ltd</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="csrf" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images/theme/logo.png') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('public/front/css/main.css?v=3.4') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    

    


    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+977) 9851154902</a></li>
                                <li><i class="fi-rs-marker"></i><a href="https://www.google.com/maps/place/Olanep+Fashion+pvt.ltd/@27.7239159,85.2965183,15z/data=!4m6!3m5!1s0x39eb199eb4f1b5b9:0x2f5cc61342e4fdac!8m2!3d27.7239159!4d85.2965183!16s%2Fg%2F11txndjhhz">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">


                            @auth
                                <li><i class="fi-rs-user"></i><a href="{{ route('front.profile.index') }}">{{ auth()->user()->name }}</a>
                                    |<form action="{{ route('logout') }}" method="post" class="d-inline">
                                        @csrf
                                    <button type="submit" class="btn btn-link link-light text-decoration-none m-0 p-0 "><i class="fa fa-sign-out" aria-hidden="true"></i>logout</button></a>
                                </form>
                               @else
                               <li><i class="fi-rs-user"></i><a href="{{ route('register') }}">Sign Up</a>/
                                <a href="{{ route('login') }}"><i class="fi-rs-user"></i>Login</a>
                            
                            </li>

                              


                         @endauth
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ url('public/images/theme/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="{{ route('front.pages.search') }}" method="get">
                               
                                <input type="text" name="term" id="term" value="{{ request('term') }}" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{ route('front.cart.index') }}">
                                        <img alt="Evara" src="{{ url('public/front/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count blue">{{ $totalQty }}</span>
                                    </a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ url('public/images/theme/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>     
                                    <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Suits & Blazers</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                     @foreach ($categories as $category)
                                    <li><a href="{{ route('front.pages.category',[$category->id]) }}">{{ $category->name }}</a></li>

                                   @endforeach
                                     
                                     
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="{{ route('front.home') }}">Home 
                                        </li>
                                    <li>
                                        <a href="{{ route('front.pages.about') }}">About</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('front.pages.about') }}">Our Manufacturing</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-headset"></i><span>Hotline</span> 9851154902 </p>
                    </div>
                    
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{ url('public/images/theme/logo.png') }}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                @foreach ($categories as $category)
                                    
                                <li><a href="{{ route('front.pages.category',[$category->id]) }}"><i class="evara-font-dress"></i>{{ $category->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="index.html">Home</a>
                               
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{ route('front.pages.about') }}">About</a>
                                
                                    
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    
                            
                            
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="page-contact.html"> Our location </a>
                    </div>
                  @auth
                    @else
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Log In / Sign Up </a>
                    </div>
                  @endauth
                    

                    <div class="single-mobile-header-info">
                        <a href="#">(+977) 9851154902 </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
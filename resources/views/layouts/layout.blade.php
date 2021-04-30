<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SITE TITLE -->
<title>{{ config('app.name') }}</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="/assets/css/animate.css">   
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/assets/css/all.min.css">
<link rel="stylesheet" href="/assets/css/ionicons.min.css">
<link rel="stylesheet" href="/assets/css/themify-icons.css">
<link rel="stylesheet" href="/assets/css/linearicons.css">
<link rel="stylesheet" href="/assets/css/flaticon.css">
<link rel="stylesheet" href="/assets/css/simple-line-icons.css">

<!--- owl carousel CSS-->
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="/assets/css/slick.css">
<link rel="stylesheet" href="/assets/css/slick-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="/assets/images/logo.png" alt="logo" />
                    <img class="logo_dark" src="/assets/images/logo.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="/">Home</a></li> 
                        <li><a class="nav-link nav_item" href="/about">About Us</a></li> 
                        <li><a class="nav-link nav_item" href="/contact">Contact Us</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div><div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            {{-- <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
                            </div> --}}
                        </div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="ti-user"></i></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            @if(Auth::check())
                                <ul class="cart_list">
                                    @if(Auth::user()->hasRole('renter'))
                                    <li>
                                        <a href="{{ route('vehicle-data') }}">Add Vehicle Details</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->hasRole('customer'))
                                    <li>
                                        <a href="/orders">My Order History</a>
                                    </li>
                                    <li>
                                        <a href="/profile">My Profile</a>
                                    </li>
                                    @endif
                                </ul>
                                <div class="cart_footer">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <p class="cart_buttons">
                                            <a href="#" class="btn btn-fill-out rounded-0 checkout" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                                        </p>
                                    </form>
                                </div>
                            @else
                                <div class="cart_footer">
                                    <p class="cart_buttons">
                                        <a href="{{ route('login') }}" class="">Login</a>
                                        <br>
                                        <a href="{{ route('register') }}">Sign Up</a>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->



@yield('main')



<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="/assets/images/logo lite.png" alt="logo"/></a>
                        </div>
                        <p>Hassle free Vehicle renting service</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/about')}}">About Us</a></li>
                            <li><a href="{{url('/faq')}}">FAQ</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="#">contact@vrs.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+91 98785***</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2021 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="/assets/js/jquery-3.5.1.min.js"></script>
<!-- Moment JS -->
<script src="/assets/js/plugin/moment/moment.min.js"></script> 
<!-- popper min js -->
<script src="/assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="/assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="/assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="/assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="/assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="/assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="/assets/js/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="/assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="/assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="/assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="/assets/js/jquery.elevatezoom.js"></script>
<!-- date and timepicker -->
<script src="/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
<!-- scripts js --> 
<script src="/assets/js/scripts.js"></script>

@yield('jsscript')

</body>
</html>
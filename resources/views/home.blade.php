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
<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">   
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/linearicons.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/simple-line-icons.css">

<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Slick CSS -->
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/slick-theme.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg"> 
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="assets/images/logo.png" alt="logo" />
                    <img class="logo_dark" src="assets/images/logo.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="{{ url('/') }}">Home</a></li> 
                        <li><a class="nav-link nav_item" href="{{ url('/about') }}">About Us</a></li> 
                        <li><a class="nav-link nav_item" href="{{ url('/contact') }}">Contact Us</a></li> 
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
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
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                    <li><a href="login.html"><i class="ti-user"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        
    <div class="carousel-item active background_bg" data-img-src="assets/images/banner1.jpg">
        <div class="banner_slide_content">
            <div class="container"><!-- STRART CONTAINER -->
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="banner_content">
                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Self Drive Cars for Rent !</h5>
                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Fill the details for magic.</h2>
                            <form method="post">
                            <div class="row staggered-animation" data-animation="slideInLeft" data-animation-delay="1.5s">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="from" id="datetime1" placeholder="When do you need a car ?">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="to" id="datetime2" placeholder="Till when do you need a car ?">
                                </div>
                                <div class="form-group col-md-6">
                                    <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" href="#" data-animation="slideInLeft" data-animation-delay="2s">Search Cars</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- END CONTAINER-->
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
</div>
<!-- END SECTION BANNER -->

<!-- END MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION TESTIMONIAL -->
<div class="section bg_redon">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s1 text-center">
                    <h2>Our Client Say!</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="testimonial_wrap testimonial_style1 carousel_slider owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-center="true" data-loop="true" data-autoplay="true" data-items='1'>
                    <div class="testimonial_box">
                        <div class="testimonial_desc">
                            <p>Thank you for providing unlimited kilometers. Our road trip with friends was so stress free and fun because we knew we did not have to pay anything over the money each of us pooled in no matter where all we went.</p>
                        </div>
                        <div class="author_wrap">
                            <div class="author_img">
                                <img src="assets/images/user_img1.jpg" alt="user_img1" />
                            </div>
                            <div class="author_name">
                                <h6>Lissa Castro</h6>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_desc">
                            <p>I loved the service. The cars were clean and the delivery guy was polite. Thank you for the surprise gift in your car.</p>
                        </div>
                        <div class="author_wrap">
                            <div class="author_img">
                                <img src="assets/images/user_img2.jpg" alt="user_img2" />
                            </div>
                            <div class="author_name">
                                <h6>Alden Smith</h6>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_desc">
                            <p>Cheapest yet the most wonderful cars. I loved how MyChoize provides Japanese quality at Indian Prices. Great fun and amazing cars.</p>
                        </div>
                        <div class="author_wrap">
                            <div class="author_img">
                                <img src="assets/images/user_img3.jpg" alt="user_img3" />
                            </div>
                            <div class="author_name">
                                <h6>Daisy Lana</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION SHOP INFO -->
<div class="section pb_70">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">  
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <i class="flaticon-shipped"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Anywhere Delivery</h5>
                            <p>We hand deliver and pickup your cars from your doorstep, office or nearby airports.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">  
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>Unlimited Kilometers</h5>
                            <p>No Kilometer Capping. Drive as much as you want without paying anything extra!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">  
                    <div class="icon_box icon_box_style1">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <div class="icon_box_content">
                            <h5>24/7 Support</h5>
                            <p>If you are not sure or need any assistant regarding our service, just give us a ring.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END SECTION SHOP INFO -->

</div>
<!-- END MAIN CONTENT -->

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/images/logo lite.png" alt="logo"/></a>
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
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- Moment JS -->
<script src="assets/js/plugin/moment/moment.min.js"></script> 
<!-- popper min js -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- imagesloaded js --> 
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- jquery.dd.min js -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- elevatezoom js -->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!-- date and timepicker -->
<script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>
<script>
    $('#datetime1').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
    $('#datetime2').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
</script>
</body>
</html>
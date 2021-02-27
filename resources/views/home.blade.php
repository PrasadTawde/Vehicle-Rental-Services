@extends('layouts/layout')

@section('main')

<!-- START SECTION BANNER -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
        
    <div class="carousel-item active background_bg" data-img-src="assets/images/banner1.jpg">
        <div class="banner_slide_content">
            <div class="container"><!-- STRART CONTAINER -->
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="banner_content">
                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Self Drive Cars for Rent !</h5>
                            <h3 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Fill the details for magic.</h3>
                            <form method="POST" action="/search">
                                @csrf
                                <div class="row staggered-animation" data-animation="slideInLeft" data-animation-delay="1.5s">
                                    <div class="form-group col-md-4">
                                        <select name="location" id="location" class="form-control">
                                            <option disabled="" selected="">Select City</option>
                                            @foreach($location_states as $state)
                                                <option value="{{ $state->station_state }}">{{ $state->station_state }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" name="fromdate" id="datetime1" placeholder="When do you need a car ?" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" name="todate" id="datetime2" placeholder="Till when do you need a car ?" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-fill-out rounded-0 staggered-animation text-uppercase" data-animation="slideInLeft" data-animation-delay="2s">Search Cars</button>
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

@endsection

@section('jsscript')

<script>
    $('#datetime1').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
    $('#datetime2').datetimepicker({
        format: 'MM/DD/YYYY H:mm',
    });
</script>

@endsection

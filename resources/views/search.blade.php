@extends('layouts/layout')

@section('main')


{{-- section --}}
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <form method="POST" action="/search">
            @csrf
            <div class="row align-items-center">
                <div class="col-md-3">
                    <select name="location" id="location" class="form-control">
                        <option disabled="">Select City</option>
                        @foreach($location_states as $state)
                            <option value="{{ $state->station_state }}" @if($state->station_state == $formData['location']) selected="" @endif>{{ $state->station_state }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="fromdate" id="datetime1" placeholder="When do you need a car ?" required="" value="{{$formData['fromdate']}}">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="todate" id="datetime2" placeholder="Till when do you need a car ?" required="" value="{{$formData['todate']}}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-fill-out rounded-1 text-uppercase">Modify Search</button>
                </div>
            </div>
        </form>
    </div><!-- END CONTAINER-->
</div>
{{-- end section --}}

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center mb-4 pb-1">
                    <div class="col-12">
                        <div class="product_header">
                            <div class="product_header_left">
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product_header_right">
                                <div class="products_view">
                                    <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                    <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                </div>
                                <div class="custom_select">
                                    <select class="form-control form-control-sm">
                                        <option value="">Showing</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- list grid --}}

                <div class="row shop_container" id="list_cars_div">
                    @foreach($vehicles as $vehicle)
                    <div class="col-md-3 col-9">
                        <div class="product">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="assets/images/maruti-wagon-r.png" alt="maruti-wagon-r">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">{{ $vehicle->vehicle_model }}</a></h6>
                                <div class="product_price">
                                    <span class="price">{{ $vehicle->vehicle_min_deposite }}/-</span>
                                    <del>{{ $total = $vehicle->vehicle_min_deposite + 3989 }}</del>
                                    <div class="product_info">
                                        <ul>
                                            <li>
                                                @if($vehicle->vehicle_type == "hatchback")
                                                    2 Baggage
                                                @endif
                                            </li>
                                            <li>7 Seater</li>
                                            <li>{{ $vehicle->vehicle_fuel_type }}</li>
                                            <li>{{ $vehicle->vehicle_state }}</li>
                                            <li><strong>120 Free kms</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:68%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="product_color_switch">
                                        <span class="active" data-color="#87554B"></span>
                                        <span data-color="#333333"></span>
                                        <span data-color="#DA323F"></span>
                                    </div>
                                </div>
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination mt-3 justify-content-center pagination_style1">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

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
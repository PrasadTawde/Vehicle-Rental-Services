@extends('layouts/layout')

@section('main')

<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image vertical_gallery">
                        <!-- <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-vertical="true" data-vertical-swiping="true" data-slides-to-show="5" data-slides-to-scroll="1" data-infinite="false">
                       
                    </div> -->
                        <div class="product_img_box">
                            <img id="product_img" src='/assets/images/maruti-wagon-r.png' data-zoom-image="/assets/images/maruti-wagon-r.pngg" alt="product_img1" />
                            <a href="#" class="product_img_zoom" title="Zoom">
                                <span class="linearicons-zoom-in"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h4>Summary</h4>
                        <p><i class="fas fa-suitcase-rolling"></i> 2 Baggage <i class="fas fa-chair"></i> 5 Seater <i class="fas fa-gas-pump"></i> Petrol <i class="fab fa-medium-m"></i> Manual</p>
                        <hr>
                        <span style="display:block; margin-top: 20px;word-spacing:10px"><b>From:</b> {{$fromdate}}</span> 
                        <span style="display:block; margin-top: 20px;word-spacing:10px"><b>To:</b> {{$todate}}</span>

                        <hr>
                        <span style="font-weight: bold;">Free kms for rental</span> <span style="margin-left:auto;float:right;">120 kms</span>
                        <br>
                        <span style="font-weight: bold;">Extra km charges</span> <span style="margin-left:auto;float:right;">@ 7/km</span>
                        <hr>
                        <span style="font-size: 10px; color: red;">Important:</span><br>
                        <span>Minimum permissible age for renting out car is 21 years and the driving license of the renter should be minimum one year old as on the rental start date</span>
                      </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="pr_detail">
                        <div class="product_description">
                            <form action="/payment" method="post">
                            @csrf
                            {{ Session::forget('success') }}    
                            @foreach($vDetails as $details)
                            <h4 class="product_title"><a href="#">{{ $details->vehicle_model }}</a></h4>

                            <div class="product_sort_info">
                                <hr>
                                <center><span>--CAR PICKUP & DROP LOCATION--</span></center>
                                <ul>
                                    <hr>
                                    <li>
                                        <select class="form-control" id="stations" name="stations">
                                            <option selected="" disabled=""> Car Pickup Locations</option>
                                            @foreach($stations as $station)
                                            <option value="{{$station->station_id}}">{{$station->station_location}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li>
                                        <textarea class="form-control" id="address" disabled=""></textarea>
                                    </li>
                                    <hr>
                                    <li>
                                        <select class="form-control" id="stations2" name="stations2">
                                            <option selected="" disabled=""> Car Drop Locations</option>
                                            @foreach($stations as $station)
                                            <option value="{{$station->station_id}}">{{$station->station_location}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li>
                                        <textarea class="form-control" disabled="" id="address2"></textarea>
                                    </li>
                                    <hr>
                                    <li>
                                        <span>Rental</span> 
                                        <span style="margin-left:auto;float:right;"> 
                                            ₹
                                            @php 
                                                $rent = 2000;
                                                echo $rent;
                                            @endphp
                                            /-
                                        </span>
                                    </li>
                                    <hr>
                                    <li> <span>Refundable Deposit</span> <span style="margin-left:auto;float:right;t">₹ {{ $deposite = $details->vehicle_min_deposite}}/- </span></li>
                                    <hr>
                                    <li>
                                        <span>Tax</span>
                                        <span style="margin-left:auto;float:right;">
                                            ₹
                                            @php
                                                $tax = 280;
                                                echo $tax;
                                            @endphp
                                            /-
                                        </span>
                                    </li>
                                    <hr>
                                    <li> <span>Insurance</span> <span style="margin-left:auto;float:right;">Included</span> </li>
                                    <hr>
                                    <li> <span>Fuel</span> <span style="margin-left:auto;float:right;">Not Included</span> </li>
                                    <hr>
                                    <li>
                                        <span style="font-weight: bold; font-size: 15px;">Payable Amount</span>
                                        <span style="margin-left:auto;float:right; font-weight: bold; font-size: 15px;">
                                            ₹
                                            @php 
                                                $total = $rent + $deposite + $tax;
                                                echo $total;
                                            @endphp
                                            /-
                                            <input type="text" class="amount" name="amount" hidden="" value="@php echo$total; @endphp">
                                        </span> 
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="cart_extra">
                        <div class="cart_btn">
                            <button class="btn btn-fill-out btn-addtocart" type="submit">Proceed</button>
                        </div>
                    </div>
                    <hr />
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="large_divider clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

</div>



@endsection

@section('jsscript')

<script type="text/javascript">
    $(document).ready(function () {
        $('#stations').change(function () {
            var id = $(this).val();

            $.ajax({
                url: '/book/'+id,
                type: 'get',
                dataType: 'json',
                success:function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i].station_id;
                            var address = response.data[i].station_address;
                            $('#address').val(address);
                        }
                    }
                }
            })
        });

        $('#stations2').change(function () {
            var id = $(this).val();

            $.ajax({
                url: '/book/'+id,
                type: 'get',
                dataType: 'json',
                success:function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i].station_id;
                            var address = response.data[i].station_address;
                            $('#address2').val(address);
                        }
                    }
                }
            })
        });
    });
</script>

@endsection
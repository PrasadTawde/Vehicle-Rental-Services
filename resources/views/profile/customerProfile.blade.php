
@extends('layouts/layout')

@section('main')

<!-- START MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
       <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#customer-detail" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Customer Details</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
                    </li> -->
                  <!--   <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account details</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="tab-content dashboard_content">
             <div class="tab-pane fade active show" id="customer-detail" role="tabpanel" aria-labelledby="dashboard-tab">
               <div class="card">
                   <div class="card-header">
                    <h3>Customer Details</h3>
                </div>
                <div class="card-body">

                  <div class="col-lg-6 col-md-6">


                     @csrf

                     @foreach($customers as $customer)
                     <h4 class="product_title">{{ $customer->customer_fname }}  {{$customer->customer_lname }}</a></h4>
                     <ul style="list-style-type:none;">
                        
                        <hr>

                        <li> Contact Number :<span style="margin-left:auto;margin-right:auto;float:right;"> {{$customer->customer_contact_no}}</span></li>
                        <hr>
                        <li> Country  :<span style="margin-left:auto;margin-right:auto;float:right;"> {{$customer->customer_country}}</span></li>
                        <hr>
                        <li> state :<span style="margin-left:auto;margin-right:auto;float:right;"> {{$customer->customer_state}}</span></li>
                        <hr>

                        <li> License Number :<span style="margin-left:auto;margin-right:auto;float:right;"> {{$customer->customer_driving_licence_no}}</span></li>
                        <hr>


                    </ul>

                    <div class="cart_btn">
                        <button class="btn btn-fill-out btn-sm" type="button"><i></i><a href="{{'/profile/edit/'.$customer->customer_id}}">Update</a> </button>
                    </div>


                    @endforeach
                </div>


            </div>
        </div>
    </div>


<div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
  <div class="card">
     <div class="card-header">
        <h3>Account Details</h3>
    </div>
    <div class="card-body">
<!--        <p>Already have an account? <a href="#">Log in instead!</a></p>
 -->

    
       <form  action="/profile/create" method="POST"  >
        @csrf  

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <div class="row">
            <div class="form-group col-md-6">
             <label>First Name <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_fname" type="text" value="{{old('customer_fname')}}">
         </div>
         <div class="form-group col-md-6">
             <label>Last Name <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_lname" type="text" value="{{old('customer_lname')}}">
         </div>
         <div class="form-group col-md-12">
             <label>Contact Number <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_contact_no" type="phone" value="{{old('customer_contact_no')}}">
         </div>
         <div class="form-group col-md-12">
             <label>Country <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_country" type="text" value="{{old('customer_country')}}">
         </div>
         <div class="form-group col-md-12">
             <label>State <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_state" type="text"value="{{old('customer_state')}}">
         </div>
         <div class="form-group col-md-12">
             <label>Driving License Number <span class="required">*</span></label>
             <input required="" class="form-control" name="customer_driving_licence_no" type="text" value="{{old('customer_driving_licence_no')}}">
         </div>

         <div class="col-md-12">
            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
    <div class="container"> 
       <div class="row align-items-center"> 
        <div class="col-md-6">
            <div class="heading_s1 mb-md-0 heading_light">
                <h3>Subscribe Our Newsletter</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="newsletter_form">
                <form>
                    <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                    <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->
@endsection
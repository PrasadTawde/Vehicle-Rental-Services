@extends('layouts/layout')

@section('main')

<div class="container">
	<div class="row justify-content-center">

		<div class="col-xl-6 col-md-10">

			<div class="padding_eight_all bg-white">

				<h1>Update</h1>

				<form action="/edit/<?php echo $customers[0]->customer_id; ?>" method="POST">
					@csrf  

					<input type="hidden" name="customer_id" value='<?php echo$customers[0]->customer_id; ?>'>

					<div class="row">
						<div class="form-group col-md-6">
							<label>First Name <span class="required">*</span></label>
							<input type="text" class="form-control" name="customer_fname" value='<?php echo$customers[0]->customer_fname; ?>' required="">
						</div>
						<div class="form-group col-md-6">
							<label>Last Name <span class="required">*</span></label>
							<input type="text" class="form-control" name="customer_lname" value='<?php echo$customers[0]->customer_lname; ?>' required="">
						</div>
						<div class="form-group col-md-12">
							<label>Contact Number <span class="required">*</span></label>
							<input type="phone" class="form-control" name="customer_contact_no" value='<?php echo$customers[0]->customer_contact_no; ?>' required="">
						</div>
						<div class="form-group col-md-12">
							<label>Country <span class="required">*</span></label>
							<input type="text" class="form-control" name="customer_country" value='<?php echo$customers[0]->customer_country; ?>' required="" >
						</div>
						<div class="form-group col-md-12">
							<label>State <span class="required">*</span></label>
							<input type="text" class="form-control" name="customer_state" value='<?php echo$customers[0]->customer_state; ?>' required="">
						</div>
						<div class="form-group col-md-12">
							<label>Driving License Number <span class="required">*</span></label>
							<input type="text" class="form-control" name="customer_driving_licence_no" value='<?php echo$customers[0]->customer_driving_licence_no; ?>'required="">
						</div>

						<div class="col-md-12">
							<button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Update</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>


@endsection
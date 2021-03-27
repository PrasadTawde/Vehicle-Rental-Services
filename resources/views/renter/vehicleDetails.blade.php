@extends('layouts/layout')

@section('main')



<div>
			<div class="text-center ">
			<h3 class="text-info">	Enter Vehicle Details</h3>
			</div>
		</div> 

        <form name = "form1" method="post" action="vehicle-data">   
        @csrf 
			<div class="container d-block bg-light text-white pt-5 pb-5"  style="padding-left:30%;">
            <div class = "row justify-content-centre">    
                <div class = "col-md-2 p-2">    
                    <label>Vehicle Number:</label>
				</div>
				<div class = "col-md-2 p-2">    
                    <input type = "text" name = "vNo" value = "" required/>    
                </div> 
			</div>
			<div class = "row align-items-centre  mr-5"> 
                <div class = "col-md-2 p-2">    
                    <label>Vehicle Type:</label>
				</div>
				<div class = "col-md-2 p-2 " style="margin-left:10px">
                    <select id="type" name="vType">
					    <option value="2 Wheeler">2 Wheeler</option>
					    <option value="4 Wheeler">4 Wheeler</option>
				 	</select>   
                </div>
			</div>
			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>Vehicle Model:</label>
				</div>
				<div class = "col-md-2 p-2">    
                    <input type = "text" name = "vModel" value = "" required/>
                </div> 
			</div>
			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>Fuel Type:</label> 
				</div>
				<div class = "col-md-2 p-2">   
                     <select id="ftype" name="fType">
					    <option value="Petrol">Petrol</option>
					    <option value="Diesel">Diesel</option>
				 	</select>       
                </div>
			</div>
			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>Deposit Amount:</label>
				</div>
				<div class = "col-md-2 p-2">    
                    <input type = "number" name = "dAmount" value = "" required/>    
                </div>  
			</div>

			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>Vehicle Status:</label>
				</div>
				<div class = "col-md-2 p-2">    
                    <select id="vstatus" name = "vStatus" >
					<option value="Available">Available</option>
					<option value="Rented">Rented</option>
					<option value="Maintainance">Maintainance</option>
					</select>    
                </div>  
			</div>

			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>State:</label>  
				</div>
				<div class = "col-md-2 p-2">  
                    <select id="state" name="state" class="">
					  <option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
						<option value="Daman and Diu">Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Puducherry">Puducherry</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="West Bengal">West Bengal</option>
				 	</select>     
                </div>
			</div>
			<div class = "row align-item-centre "> 
                <div class = "col-md-2 p-2">    
                    <label>Location:</label> 
				</div>
				<div class = "col-md-2 p-2">   
                    <input type = "text" name = "location" value = "" required/>    
                </div>
			</div>
			<div class = "row align-item-centre "> 
                 <div class = "col-md-2 justify-content-center pt-3 " style="padding-right:20%">
    				<input type = "submit" value = "Upload" class="btn btn-primary">
 				 </div>
				  <div class = "col-md-2 justify-content-center pt-3" style="padding-left:20%">
    				<input type = "reset" value = "clear" class="btn btn-danger">
 				 </div>
			</div>
            </div> 

        </form>
        @endsection
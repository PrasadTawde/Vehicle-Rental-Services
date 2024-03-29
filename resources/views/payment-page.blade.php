
<button id="rzp-button1" hidden="">Pay</button> 
<form action="{{url('/payment-complete')}}" method="POST" hidden="">
        <input type="hidden" value="{{csrf_token()}}" name="_token" /> 
        <input type="text" class="form-control" id="rzp_paymentid"  name="rzp_paymentid">
        <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid">
        <input type="text" class="form-control" id="rzp_signature" name="rzp_signature">
        <input type="text" class="form-control" id="rzp_amount" name="rzp_amount">
        <input type="text" class="form-control" id="vehicle_id" name="vehicle_id">
        <input type="text" class="form-control" id="pickup_id" name="pickup_id">
        <input type="text" class="form-control" id="drop_id" name="drop_id">
        <input type="text" class="form-control" id="fromdate" name="fromdate">
        <input type="text" class="form-control" id="todate" name="todate">
    <button type="submit" id="rzp-paymentresponse" class="btn btn-primary">Submit</button>
</form>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var tamount = {{$response['amount']}};
    document.getElementById('rzp_amount').value = tamount/100;

    var v_id = {{$response['vehicle_id']}};
    document.getElementById('vehicle_id').value = v_id;
    var p_id = {{$response['pickup_id']}};
    document.getElementById('pickup_id').value = p_id;
    var d_id = {{$response['drop_id']}};
    document.getElementById('drop_id').value = d_id;
    var fromdate = "{{$response['fromdate']}}";
    document.getElementById('fromdate').value = fromdate;
    var todate = "{{$response['todate']}}";
    document.getElementById('todate').value = todate;

var options = {
    "key": "{{$response['razorpayId']}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "{{$response['currency']}}",
    "description": "{{$response['description']}}",
    "image": "https://example.com/your_logo", // You can give your logo url
    "order_id": "{{$response['orderId']}}",

    "handler": function (response,tamount){
        document.getElementById('rzp_paymentid').value = response.razorpay_payment_id;
        document.getElementById('rzp_orderid').value = response.razorpay_order_id;
        document.getElementById('rzp_signature').value = response.razorpay_signature;

        document.getElementById('rzp-paymentresponse').click();
    },
    "theme": {
        "color": "#FF324D"
    }
};
var rzp1 = new Razorpay(options);
window.onload = function(){
    document.getElementById('rzp-button1').click();
};

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>


<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Payment;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Config;
use Auth;

class RazorpayController extends Controller
{
    private $razorpayId = "rzp_test_Or8xC0uxeq78d2";
    private $razorpayKey = "40ixOuQxIypvODKfstsDO7w0";

    public function payment()
    {
    	return view('payment');
    }

    public function initiate(Request $request)
    {
        // Generate random receipt id
        $receiptId = Str::random(20);

        $api = new Api($this->razorpayId, $this->razorpayKey);

        // Creating order
        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR'
            )
        );

        // Let's create the razorpay payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR',
            'description' => 'Testing description',
        ];

        // Let's checkout payment page is it working
        return view('payment-page',compact('response'));
    }

    public function complete(Request $request)
    {
        // Now verify the signature is correct . We create the private function for verify the signature
        $signatureStatus = $this->SignatureVerify(
            $request->all()['rzp_signature'],
            $request->all()['rzp_paymentid'],
            $request->all()['rzp_orderid']
        );

        $user = Auth::user();
        $user_id = $user->id;
        $order_id = $request->all()['rzp_paymentid'];
        $razorpay_id = $request->all()['rzp_orderid'];
        $amount = $request->all()['rzp_amount'];

        // storing data in table and sending user on payment successful page
        if($signatureStatus == true)
        {
            $pay = new Payment;
            $pay->order_id = $order_id;
            $pay->razorpay_id = $razorpay_id;
            $pay->amount = $amount;
            $pay->save();
            return view('payment-success-page');
        }
        else{
            return view('payment-failed-page');
        }
    }

    private function signatureVerify($_signature,$_paymentId,$_orderId)
    {
        try
        {
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            return true;
        }
        catch(\Exception $e)
        {
            // If Signature is not correct its give a excetption so we use try catch
            return false;
        }
    }

}

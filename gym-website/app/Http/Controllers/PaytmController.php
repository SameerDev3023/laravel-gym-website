<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;

class PaytmController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function paytmPayment(Request $request)
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => rand(),
          'user' => rand(10,1000),
          'mobile_number' => '123456789',
          'email' => 'paytmtest@gmail.com',
          'amount' => 100,
          'callback_url' => route('paytm.callback'),
        ]);
        return $payment->receive();
    }


    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paytmCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          //Transaction Successful
          return view('gym-frontend/paytm.paytm-success-page');
        }else if($transaction->isFailed()){
          //Transaction Failed
          return view('gym-frontend/paytm.paytm-fail');
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
          return view('gym-frontend/paytm.paytm-fail');
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }

    /**
     * Paytm Payment Page
     *
     * @return Object
     */
    public function paytmPurchase()
    {
        return view('gym-frontend/order-form');
    } 
}

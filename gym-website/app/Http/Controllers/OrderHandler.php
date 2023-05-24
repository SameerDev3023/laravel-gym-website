<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\shopping_bag;
class OrderHandler extends Controller
{
    public function addToCart(){
        $cartData = shopping_bag::all();
        $cartAllData = array('cartAllData'=>$cartData);
        session()->put('cartAllData',$cartAllData);
         $data = compact('cartData');
        return view('gym-frontend/shopping-cart')->with($data);
    }
        public function InsertToCart(Request $request){
        $cart = shopping_bag::where('package_price', $request['package_price'])
        ->where('package_duration', $request['package_duration'])
        ->first();
      
          
            if ($cart) {
        echo "These values are already added to the cart.";
            } else {
            $cart = new shopping_bag;
            $cart->package_price = $request['package_price'];
            $cart->package_duration = $request['package_duration'];
            $cart->save();
                echo "Values added to the cart successfully.";
              
           }
    }

    public function RemoveToCart($id){
        $cart =  shopping_bag::find($id);
        if($cart!==""){
            $cart->delete();
            return redirect()->back();
        }else{
            echo'something went wrong';
        }


    }

    public function OrderForm(Request $request){

        $url = $request->all();
        // echo'<pre>';
        // print_r($url);
        // $url ="";
        // if($paymentMethod['payment_option']=='paytm'){
        //     $url=url('/paytm-payment');
        // } else if($paymentMethod['payment_option']=='google-pay'){
        //     $url=url('/google-pay-payment');
        // }else{
        //     $url=url('/cod');
        // }
        // $data = compact('url');
        return view('gym-frontend/order-form');
    }
}
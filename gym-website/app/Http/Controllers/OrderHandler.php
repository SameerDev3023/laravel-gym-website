<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\shopping_bag;
use App\Models\UserOrders;
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

    public function OrderForm(){
        return view('gym-frontend/order-form');
    }
    public function COD(Request $request){
        $UserOrder = new UserOrders;
         $UserOrder->customer_name = $request['customer_name'];
         $UserOrder->customer_email =$request['customer_email']; 
         $UserOrder->customer_gender =$request['customer_gender'];
         $UserOrder->customer_number =$request['customer_number'];
         $UserOrder->customer_country =$request['customer_country'];
         $UserOrder->customer_state =$request['customer_state'] ;
         $UserOrder->customer_city =$request['customer_city'] ;
         $UserOrder->customer_address =$request['Address'] ;
         $UserOrder->customer_pincode =$request['customer_pincode'];
         $UserOrder->payment_method =$request['payment_option'] ;
         $UserOrder->payments_status ="pending" ;
         $UserOrder->total_order_price = session()->get('total_price') ;
         $UserOrder->save();

         shopping_bag::truncate();
        return view('gym-frontend/COD-Success');
    }
}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\shopping_bag;
class OrderHandler extends Controller
{
    public function addToCart(){
        return view('gym-frontend/shopping-cart');
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
}
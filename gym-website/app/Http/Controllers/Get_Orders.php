<?php

namespace App\Http\Controllers;
use App\Models\Get_Orders_Customer;

use Illuminate\Http\Request;

class Get_Orders extends Controller
{
    //
    public function GetOrder(){
        $email = session()->get('user_email');
        $CustomersOrders = Get_Orders_Customer::where('customer_email', $email)->get();
        $data = compact('CustomersOrders');

       return view('gym-frontend/your-order')->with($data);
        }
}

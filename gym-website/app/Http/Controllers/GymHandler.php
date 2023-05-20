<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymCrudHandler;

class GymHandler extends Controller
{
    //
    public function index(){
        session()->forget('user_email');
            return view('gym-frontend/home');
    }
    public function about(){
        return view('gym-frontend/about');
}
public function packages(){
    return view('gym-frontend/packages');
}
public function contact(){
    return view('gym-frontend/contact');
}
public function gallery(){
    return view('gym-frontend/gallery');
}
public function login(){
    return view('gym-frontend/login');
}

public function signUp(){
    return view('gym-frontend/sign-up');
}

public function insert(Request $request){
    $GymCrudHandler = new GymCrudHandler;
    $GymCrudHandler->name = $request['name'];
    $GymCrudHandler->email = $request['email'];
    $GymCrudHandler->country = $request['country'];
    $GymCrudHandler->city = $request['City'];
    $GymCrudHandler->address = $request['Address'];
    $GymCrudHandler->number = $request['Number'];
    $GymCrudHandler->password = $request['password'];
    $GymCrudHandler->confirm_password = $request['cpassword'];
    $GymCrudHandler->save();
}
}

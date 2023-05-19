<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymHandler extends Controller
{
    //
    public function index(){
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
}

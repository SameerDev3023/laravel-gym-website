<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymCrudHandler;
class AdminHandler extends Controller
{
    //
    public function admin_index()
    {
        return view('gym-frontend/admin');
    }
    public function check(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
            $user = GymCrudHandler::where('email', $email)->first();
            session()->put('user_email',$user->email);
        if ($user) {
            if ($password === $user->password) {
                return redirect('/admin');
            } else {
                echo'Password is incorrect';
            }
        } else {
            echo'User does not exist';
        }
    }
    public function check_login(){
        
    }
    public function logout(){
        session()->forget('user_email');
        return redirect('/');
    }
}

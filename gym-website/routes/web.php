<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymHandler;
use App\Http\Controllers\AdminHandler;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GymHandler::class,'index']);
Route::get('/about',[GymHandler::class,'about']);
Route::get('/packages',[GymHandler::class,'packages']);
Route::get('/contact',[GymHandler::class,'contact']);
Route::get('/gallery',[GymHandler::class,'gallery']);
Route::get('/login',[GymHandler::class,'login']);
Route::get('/sign-up',[GymHandler::class,'signUp']);
Route::post('/sign-up',[GymHandler::class,'insert']);
Route::get('/admin',[AdminHandler::class,'admin_index'])->middleware('loginCheck');
Route::post('/check',[AdminHandler::class,'check']);
Route::get('/logout',[AdminHandler::class,'logout']);
Route::get('/not-access',function(){
return redirect('/');
});






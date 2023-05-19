<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymHandler;
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


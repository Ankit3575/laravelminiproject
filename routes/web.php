<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

Route::view('signup','signup');
Route::post('signupcode',[usercontroller::class,'signupcode']);
Route::view('login','login');
Route::post('logincode',[usercontroller::class,'logincode']);
Route::view('userdashboard','userdashboard');
Route::get('userprofile',[usercontroller::class,'userprofile']);
Route::post('userprofilecode',[usercontroller::class,'userprofilecode']);
Route::view('userchangepassword','userchangepassword');
Route::post('uchangepasscode',[usercontroller::class,'userchangepassword']);
Route::view('contactus','contactus');
Route::post('contactcode',[usercontroller::class,'contactcode']);
Route::get('logout',[usercontroller::class,'logout']);
// admin panel code
Route::view('adminlogin','adminlogin');
Route::get('admincode',[admincontroller::class,'admincode']);
Route::view('admindashboard','admindashboard');
Route::view('addcategory','addcategory');
Route::post('categorycode',[admincontroller::class,'categorycode']);
Route::get('addsubcategory',[admincontroller::class,'subcatcode']);
Route::get('allcategory',[admincontroller::class,'allcategory']);
Route::view('addproduct','addproduct');
Route::post('addproduct',[admincontroller::class,'addproductcode']);
Route::get('userproduct',[usercontroller::class,'userproduct']);
<?php

use App\Http\Controllers\UserLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


///login api
Route::get('/login',[UserloginController::class,'index']);
// some one hit student it will call index method then index will cll stunddet table daata from the controllerQ
Route::post('/store',[UserLoginController::class,'store']);

Route::get('/userlogin/{id}',[UserLoginController::class,'show']); // finding by id 

Route::put('/userlogin/{id}',[UserLoginController::class,'update']); //update the data partial update data by patch aand completly data updated by put

Route::delete('/userlogin/{id}',[UserLoginController::class,'destroy']); 

Route::get('/userlogin/search/{username}',[UserLoginController::class,'search']);


  
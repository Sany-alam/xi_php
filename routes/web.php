<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/Signup",function(){
    return view('signup');
});


// school controllers
Route::post("/signingup","schoolController@create");


// student controller
Route::get("/","StudentController@show");
Route::post("/InsertStudent","StudentController@create");

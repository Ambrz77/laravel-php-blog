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

Route::get('/welcome', function (){
    return "Welcome to You";
});
Route::get('/welcome/{id}', function($id){
    return view('test', ['name' => $id]);
});
Route::get('/user/show', 'UserController@show');

Route::get('/home', function (){
    return view ('home');
});
Route::get('/contactus', function (){
    return view ('contactus');
});
Route::get('/aboutus', function (){
    return view ('aboutus');
});
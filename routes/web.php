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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('refund','RefundController');
Route::resource('userbalance','UserbalanceController');
Route::resource('user','UserController');
Route::resource('challengecategory','ChallengecategoryController');
Route::resource('challenge','ChalengeController');

Route::get('login/{provider}','Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\SocialAccountController@handleProviderCallback');


//test route


Route::get('/admin',function(){
        return view('layouts.ajay');
});
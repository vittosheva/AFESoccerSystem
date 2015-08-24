<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Homepage
Route::get('/', [
    'as'    => 'front.index.view',
    'uses'  => 'FrontController@getIndex',
]);

// Register - Post
Route::post('register', [
    'as'    => 'front.register.post',
    'uses'  => 'FrontController@postRegister',
]);

// Success
Route::get('success', [
    'as'    => 'front.success.view',
    'uses'  => 'FrontController@getSuccess',
]);



// Admin Group
Route::group(['prefix' => 'admin'], function(){

    // Dashboard
    Route::get('dashboard', [
        'as'    => 'admin.dashboard.view',
        'uses'  => 'AdminController@getIndex',
    ]);

    // Pins pages
    Route::resource('pins', 'PinsController');

    // Login pages
    Route::controller('/', 'LoginController', [
        'getIndex'              => 'admin.login.view',
        'postIndex'             => 'admin.login.post',
        'getRegister'           => 'admin.register.view',
        'postRegister'          => 'admin.register.post',
        'getForgotPassword'     => 'admin.forgotpassword.view',
        'postForgotPassword'    => 'admin.forgotpassword.post',
        'getLogout'             => 'admin.logout.view',
    ]);



});
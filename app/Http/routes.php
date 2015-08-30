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

/**
 *
 * FRONT PAGES
 *
 */

// INDEX
Route::get('/', [
    'as'    => 'front.home.index',
    'uses'  => 'RegisterPlanController@create',
]);

// REGISTER PLAN
Route::group(['prefix' => 'register-plan'], function() {
    Route::resource('/', 'RegisterPlanController', [
        'only'  => ['index', 'store', 'create'],
        'names' => [
            'index'     => 'front.registerplan.index',
            'store'     => 'front.registerplan.store',
            'create'    => 'front.registerplan.create',
        ],
    ]);
    // REGISTER PLAN SUCCESS
    Route::get('succcess', [
        'as' => 'front.registerplan.success',
        'uses' => 'RegisterPlanController@success'
    ]);
});



/**
 *
 * BACK PAGES
 *
 */

// ADMIN
Route::group(['prefix' => 'admin'], function() {

    // INDEX
    Route::get('/', [
        'as'            => 'back.home.index',
        'uses'          => 'LoginController@getIndex',
    ]);

    // DASHBOARD
    Route::get('dashboard', [
        'as'            => 'back.dashboard.index',
        'uses'          => 'AdminController@index',
        'middleware'    => 'auth',
    ]);

    // LOGIN
    Route::group(['prefix' => 'login'], function() {
        Route::controller('/', 'LoginController', [
            'getIndex'              => 'back.login.index',
            'postIndex'             => 'back.login.post',
            'getRegister'           => 'back.register.index',
            'postRegister'          => 'back.register.post',
            'getForgotPassword'     => 'back.forgotpassword.index',
            'postForgotPassword'    => 'back.forgotpassword.post',
            'getLogout'             => 'back.logout.index',
        ]);
    });

    // PINS
    Route::group(['prefix' => 'pins', 'middleware' => 'auth'], function() {
        Route::resource('/', 'PinsController', [
            'names' => [
                'index'     => 'back.pins.index',
                'store'     => 'back.pins.store',
                'create'    => 'back.pins.create',
                'show'      => 'back.pins.show',
                'update'    => 'back.pins.update',
                'destroy'   => 'back.pins.destroy',
                'edit'      => 'back.pins.edit',
            ],
        ]);
        Route::get('getpins', [
            'as' => 'back.pins.getpins',
            'uses' => 'PinsController@getListings',
        ]);
    });

});

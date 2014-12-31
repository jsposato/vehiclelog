<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the Closure to execute when that URI is requested.
    |
    */

    Route::get( '/', function () {
        return View::make( 'home' );
    } );

    /*
    Route::get( 'secret', function () {
        return 'secret financial data';
    } )->before( 'role:Administrator' );
    */

    Route::resource( 'users', 'UsersController' );
    Route::get( 'users/login', 'UsersController@displayLoginForm' );
    Route::post( 'users/login', 'UsersController@login' );
    Route::get( 'users/logout', 'UsersController@logout' );
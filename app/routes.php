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

    Route::get( '/', 'HomeController@home' );
    Route::get( '/home', 'HomeController@home' );

    /*
    Route::get( 'secret', function () {
        return 'secret financial data';
    } )->before( 'role:Administrator' );
    */

    Route::get( 'users/login', 'UsersController@displayLoginForm' );
    Route::post( 'users/login', ['uses' => 'UsersController@login', 'as' => 'users.login' ] );
    Route::get( 'users/logout', 'UsersController@logout' );

    Route::resource( 'users', 'UsersController' );
    Route::resource( 'logs', 'LogsController' );

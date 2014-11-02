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
        $user = User::first();
        $user->removeRole( 2 );

        return $user->roles;
    } );

    /*
    Route::get( 'secret', function () {
        return 'secret financial data';
    } )->before( 'role:Administrator' );
    */

    Route::resource( 'users', 'UsersController' );
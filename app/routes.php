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

Route::get('/', function()
{
//	return View::make('hello');
    $user = User::first();

    $user->removeRole( 2 );

    return $user->roles;
//    return User::with( 'roles' )->first();
});

    Auth::loginUsingId( 1 );

    Route::get( 'secret', function() {
        return 'secret financial data';
    })->before( 'role:Administrator' );

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function ()
{
    Route::group(['namespace' => 'Landing'], function()
    {
        // Controllers Within The "App\Http\Controllers\Admin\Landing" Namespace
        Route::resource('programs','ProgramsController');
    });
});


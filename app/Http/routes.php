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

/*
 * Comentario adicional
 */

Route::get('/', function () {
    return view('welcome');
});

/*
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function ()
{
    Route::group(['prefix' => 'landing', 'namespace' => 'Landing'], function ()
    {
        Route::resource('programas','ProgramsController');
    });

});*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function ()
{
    Route::get('/', 'AdminController@index');
    Route::resource('landing', 'LandingController');
    //Route::get('{params}', 'AdminController@resolveController');
    /*/ Route::get('{params}', function($params){

     });*/

});


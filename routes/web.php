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

Route::get('/', 'HomeController@index');
Route::get('logi', array('as'=>'logi', 'uses'=>'HomeController@logi'));

Route::group(['middleware' => 'auth'], function () {
	Route::get('dashboard', array('as'=>'index', 'uses'=>'HomeController@dashboard'));

	Route::resource('news', 'NewsController');
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

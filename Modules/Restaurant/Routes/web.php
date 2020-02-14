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

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('restaurant')->group(function () {

        Route::get('/tables', 'TablesController@index');
        Route::get('/tables/store', 'TablesController@store');

        Route::prefix('reservations')->group(function () {
            Route::get('/', ['as' => 'reservations.index', 'uses' => 'ReservationsController@index']);
            Route::get('/create', 'ReservationsController@create');
            Route::post('/store', ['as' => 'reservations.store', 'uses' => 'ReservationsController@store']);
        });
    });
});

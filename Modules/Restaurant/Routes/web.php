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

        Route::get('/table', 'TablesController@index');
        Route::get('/table/store', 'TablesController@store');

        Route::prefix('reservation')->group(function () {
            Route::get('/', ['as' => 'reservation.index', 'uses' => 'ReservationsController@index']);
            Route::get('/create', ['as' => 'reservation.create', 'uses' => 'ReservationsController@create']);
            Route::post('/store', ['as' => 'reservation.store', 'uses' => 'ReservationsController@store']);
            Route::delete('{reservation}', ['as' => 'reservation.destroy', 'uses' => 'ReservationsController@destroy']);
            Route::get('{reservation}/edit', ['as' => 'reservation.edit', 'uses' => 'ReservationsController@edit']);
            Route::put('{reservation}', ['as' => 'reservation.update', 'uses' => 'ReservationsController@update']);
        });
    });
});

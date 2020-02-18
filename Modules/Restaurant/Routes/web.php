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


Route::get('/', ['as' => 'restaurant.index', 'uses' => 'RestaurantController@index']);
Route::get('/about', ['as' => 'restaurant.about', 'uses' => 'RestaurantController@about']);
Route::get('/menu', ['as' => 'restaurant.menu', 'uses' => 'RestaurantController@menu']);


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('restaurant')->group(function () {

        Route::prefix('reservation')->group(function () {
            Route::get('/test', ['as' => 'reservation.test', 'uses' => 'ReservationsController@test']);

            Route::get('/', ['as' => 'reservation.index', 'uses' => 'ReservationsController@index']);
            Route::get('/create', ['as' => 'reservation.create', 'uses' => 'ReservationsController@create']);
            Route::post('/store', ['as' => 'reservation.store', 'uses' => 'ReservationsController@store']);
            Route::delete('{reservation}', ['as' => 'reservation.destroy', 'uses' => 'ReservationsController@destroy']);
            Route::get('{reservation}/edit', ['as' => 'reservation.edit', 'uses' => 'ReservationsController@edit']);
            Route::put('{reservation}', ['as' => 'reservation.update', 'uses' => 'ReservationsController@update']);
        });
        Route::prefix('tables')->group(function () {
            Route::get('/', ["as" => "restaurant.tables.index", "uses" => 'TablesController@index']);
            Route::get('/edit?{id}', ["as" => "restaurant.tables.edit", "uses" => 'TablesController@edit']);
            Route::get('/create', ["as" => "restaurant.tables.create", "uses" => 'TablesController@create']);
            Route::put('/update', ["as" => "restaurant.tables.update", "uses" => 'TablesController@update']);
            Route::get('/store', ["as" => "restaurant.tables.store", "uses" => 'TablesController@store']);
            Route::get('/destroy', ["as" => "restaurant.tables.destroy", "uses" => 'TablesController@destroy']);
        });
    });
});

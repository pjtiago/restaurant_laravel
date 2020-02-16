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
    Route::prefix('restaurant/tables')->group(function () {
        Route::get('/', ["as" => "restaurant.tables.index", "uses"=>'TablesController@index']);
        Route::get('/edit?{id}', ["as" => "restaurant.tables.edit", "uses"=>'TablesController@edit']);
        Route::get('/create', ["as" => "restaurant.tables.create", "uses"=>'TablesController@create']);
        Route::put('/update', ["as" => "restaurant.tables.update", "uses"=>'TablesController@update']);
        Route::get('/store', ["as" => "restaurant.tables.store", "uses"=>'TablesController@store']);
        Route::get('/destroy', ["as" => "restaurant.tables.destroy", "uses"=>'TablesController@destroy']);
    });
});

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

// define patterns
use Modules\Restaurant\Http\Models\Category;
use Modules\Restaurant\Http\Models\Product;
use Modules\Restaurant\Http\Models\Reservation;
use Modules\Restaurant\Http\Models\Table;

Route::pattern('category', '[0-9]+');
Route::pattern('product', '[0-9]+');
Route::pattern('reservation', '[0-9]+');
Route::pattern('table', '[0-9]+');

// define models
Route::model('category', Category::class);
Route::model('product', Product::class);
Route::model('reservation', Reservation::class);
Route::model('table', Table::class);

Route::get('/', ['as' => 'restaurant.index', 'uses' => 'RestaurantController@index']);
Route::get('/about', ['as' => 'restaurant.about', 'uses' => 'RestaurantController@about']);
Route::get('/menu', ['as' => 'restaurant.menu', 'uses' => 'RestaurantController@menu']);
Route::get('/blog', ['as' => 'restaurant.blog', 'uses' => 'RestaurantController@blog']);
Route::get('/blog-single', ['as' => 'restaurant.blog-single', 'uses' => 'RestaurantController@blogSingle']);
Route::get('/contact', ['as' => 'restaurant.contact', 'uses' => 'RestaurantController@contact']);
Route::get('/reservation', ['as' => 'restaurant.reservation', 'uses' => 'RestaurantController@reservation']);

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::prefix('restaurant')->group(function () {

            Route::prefix('category')->group(function () {
                Route::get('/', ['as' => 'restaurant.category.index', 'uses' => 'CategoriesController@index']);
                Route::post('/', ['as' => 'restaurant.category.store', 'uses' => 'CategoriesController@store']);
                Route::get('/create', ['as' => 'restaurant.category.create', 'uses' => 'CategoriesController@create']);
                Route::delete('{category}', ['as' => 'restaurant.category.destroy', 'uses' => 'CategoriesController@destroy']);
                Route::get('{category}/edit', ['as' => 'restaurant.category.edit', 'uses' => 'CategoriesController@edit']);
            });

            Route::prefix('product')->group(function () {
                Route::get('/', ['as' => 'restaurant.product.index', 'uses' => 'ProductsController@index']);
                Route::post('/', ['as' => 'restaurant.product.store', 'uses' => 'ProductsController@store']);
                Route::get('/create', ['as' => 'restaurant.product.create', 'uses' => 'ProductsController@create']);
                Route::delete('{product}', ['as' => 'restaurant.product.destroy', 'uses' => 'ProductsController@destroy']);
                Route::get('{product}/edit', ['as' => 'restaurant.product.edit', 'uses' => 'ProductsController@edit']);
            });

            Route::prefix('reservation')->group(function () {
                Route::get('/', ['as' => 'restaurant.reservation.index', 'uses' => 'ReservationsController@index']);
                Route::post('/', ['as' => 'restaurant.reservation.store', 'uses' => 'ReservationsController@store']);
                Route::get('/create', ['as' => 'restaurant.reservation.create', 'uses' => 'ReservationsController@create']);
                Route::put('{reservation}', ['as' => 'restaurant.reservation.update', 'uses' => 'ReservationsController@update']);
                Route::delete('{reservation}', ['as' => 'restaurant.reservation.destroy', 'uses' => 'ReservationsController@destroy']);
                Route::get('{reservation}/edit', ['as' => 'restaurant.reservation.edit', 'uses' => 'ReservationsController@edit']);

            });
            Route::prefix('table')->group(function () {
                Route::get('/', ["as" => "restaurant.table.index", "uses" => 'TablesController@index']);
                Route::post('/', ["as" => "restaurant.table.store", "uses" => 'TablesController@store']);
                Route::get('/create', ["as" => "restaurant.table.create", "uses" => 'TablesController@create']);
                Route::put('{table}', ["as" => "restaurant.table.update", "uses" => 'TablesController@update']);
                Route::delete('{table}', ["as" => "restaurant.table.destroy", "uses" => 'TablesController@destroy']);
                Route::get('{table}/edit', ["as" => "restaurant.table.edit", "uses" => 'TablesController@edit']);
            });

        });
    });
});

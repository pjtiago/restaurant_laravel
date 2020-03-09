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

use App\Models\Tag;

Route::pattern('tag', '[0-9]+');

// define models
Route::model('tag', Tag::class);


Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // User
    Route::resource('user', 'UserController');
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    // Tag
    Route::prefix('admin')->group(function () {
        Route::prefix('tag')->group(function () {
            Route::get('/', ['as' => 'tag.index', 'uses' => 'TagsController@index']);
            Route::post('/', ['as' => 'tag.store', 'uses' => 'TagsController@store']);
            Route::get('/create', ['as' => 'tag.create', 'uses' => 'TagsController@create']);
            Route::put('{tag}', ['as' => 'tag.update', 'uses' => 'TagsController@update']);
            Route::delete('{tag}', ['as' => 'tag.destroy', 'uses' => 'TagsController@destroy']);
            Route::get('{tag}/edit', ['as' => 'tag.edit', 'uses' => 'TagsController@edit']);
        });
    });
});


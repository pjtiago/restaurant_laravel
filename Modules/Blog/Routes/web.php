<?php

use Modules\Blog\Http\Models\Post;
use Modules\Blog\Http\Models\PostCategory;

Route::pattern('tag', '[0-9]+');

// define models
Route::model('post_category', PostCategory::class);
Route::model('post', Post::class);

Route::prefix('admin')->group(function () {
    Route::prefix('blog')->group(function() {

        // Post Categories
        Route::prefix('post_category')->group(function () {
            Route::get('/', ['as' => 'blog.post_category.index', 'uses' => 'PostCategoriesController@index']);
            Route::post('/', ['as' => 'blog.post_category.store', 'uses' => 'PostCategoriesController@store']);
            Route::get('/create', ['as' => 'blog.post_category.create', 'uses' => 'PostCategoriesController@create']);
            Route::put('{post_category}', ['as' => 'blog.post_category.update', 'uses' => 'PostCategoriesController@update']);
            Route::delete('{post_category}', ['as' => 'blog.post_category.destroy', 'uses' => 'PostCategoriesController@destroy']);
            Route::get('{post_category}/edit', ['as' => 'blog.post_category.edit', 'uses' => 'PostCategoriesController@edit']);
        });

        // Posts
        Route::prefix('post')->group(function () {
            Route::get('/', ['as' => 'blog.post.index', 'uses' => 'PostsController@index']);
            Route::post('/', ['as' => 'blog.post.store', 'uses' => 'PostsController@store']);
            Route::get('/create', ['as' => 'blog.post.create', 'uses' => 'PostsController@create']);
            Route::put('{post}', ['as' => 'blog.post.update', 'uses' => 'PostsController@update']);
            Route::delete('{post}', ['as' => 'blog.post.destroy', 'uses' => 'PostsController@destroy']);
            Route::get('{post}/edit', ['as' => 'blog.post.edit', 'uses' => 'PostsController@edit']);
        });
    });
});










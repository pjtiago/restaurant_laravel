<?php

namespace Modules\Blog\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Modules\Blog\Services\PostCategories\Create as CreatePostCategoriesService;
use Modules\Blog\Services\PostCategories\Update as UpdatePostCategoriesService;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('CreatePostCategoriesService', function($app) {
            return new CreatePostCategoriesService;
        });

        App::bind('UpdatePostCategoriesService', function($app) {
            return new UpdatePostCategoriesService;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Services\Tag\Create as CreateTagService;
use App\Services\Tag\Update as UpdateTagService;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('CreateTagService', function($app) {
            return new CreateTagService;
        });

        App::bind('UpdateTagService', function($app) {
            return new UpdateTagService;
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

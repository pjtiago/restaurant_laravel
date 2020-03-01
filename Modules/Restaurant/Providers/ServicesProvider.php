<?php

namespace Modules\Restaurant\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Modules\Restaurant\Services\Product\Create as CreateProductService;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('CreateProductService', function($app)
        {
            return new CreateProductService;
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

<?php

namespace Modules\Restaurant\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Modules\Restaurant\Repositories\Category\Repository as CategoryRepository;
use Modules\Restaurant\Services\Product\Create as CreateProductService;
use Modules\Restaurant\Services\Product\Update as UpdateProductService;
use Modules\Restaurant\Services\Restaurant\GetCategories as RestaurantGetCategories;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('CreateProductService', function($app) {
            return new CreateProductService;
        });

        App::bind('UpdateProductService', function($app) {
            return new UpdateProductService;
        });

        App::bind('RestaurantGetCategoriesService', function($app) {
            return new RestaurantGetCategories(new CategoryRepository);
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

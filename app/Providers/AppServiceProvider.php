<?php

namespace App\Providers;
use App\Category;
use App\Brand;
use View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer('frontEnd.home', function ($view) {
//            $view->with('categories', Category::where('publication_status', '1')->get());
//        });

        View::composer('frontEnd.home', function ($view) {
            $view->with('brands', Brand::where('publication_status', '1')->get());
        });

        View::composer('frontEnd.includes.menu', function ($view) {
            $view->with('categories', Category::where('publication_status', '1')->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

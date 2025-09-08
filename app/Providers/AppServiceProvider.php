<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Escort;
use App\Models\Beach;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot()
{
    View::composer('*', function ($view) {
        $view->with('categories', Escort::select('category')->distinct()->pluck('category'));
        $view->with('locations', Escort::select('location')->distinct()->pluck('location'));
         $view->with('beaches', Beach::orderBy('name', 'asc')->get());
    });
}
}

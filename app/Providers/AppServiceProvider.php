<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Navigation;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // $navigations=Navigation::with('children','parent')->whereNull('parent_id')->get();
       // View::share('navigations',$navigations);
    }
}

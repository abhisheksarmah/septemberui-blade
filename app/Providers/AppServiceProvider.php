<?php

namespace App\Providers;

use Spatie\BladeX\Facades\BladeX;
use Illuminate\Support\ServiceProvider;
use BinaryTorch\LaRecipe\Facades\LaRecipe;

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
        BladeX::component('components.*');
        BladeX::prefix('s');
    }
}

<?php

namespace Sumatoglobal\Septemberui;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LaRecipe::script('septemberui', __DIR__ . '/../dist/js/asset.js');
        LaRecipe::style('septemberui', __DIR__ . '/../dist/css/asset.css');
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

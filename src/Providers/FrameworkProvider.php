<?php

namespace FrameNetBrasil\Framework\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FrameworkProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../UI/errors', 'framework');
        Blade::componentNamespace('FrameNetBrasil\\Framework\\Views\\Components', 'fw');
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../Config/webtool.php', 'webtool'
        );
    }
}

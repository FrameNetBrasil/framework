<?php

namespace FrameNetBrasil\Framework\Providers;

use FrameNetBrasil\Framework\View\Components\Layout\Page;
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
        $this->loadViewsFrom(__DIR__.'/../UI', 'fw');
        Blade::componentNamespace('FrameNetBrasil\\Framework\\View\\Components', 'fw');
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

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
        $this->loadViewsFrom(__DIR__.'/../UI/errors', 'fw');
        $this->loadViewsFrom(__DIR__.'/../UI/components', 'fw');
        Blade::component('layout-page', Page::class);
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

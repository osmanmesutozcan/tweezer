<?php

namespace Osmeoz\TurboLaravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Osmeoz\TurboLaravel\Components\Frame;

class TurboLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBladeDirectives();
        $this->registerViewComponents();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('turboscripts', [TurboBladeDirectives::class, 'turboscripts']);
    }

    protected function registerViewComponents()
    {
        $this->loadViewComponentsAs('turbo', [
            Frame::class,
        ]);
    }
}

<?php

namespace Btybug\btybug\Providers;

use Btybug\btybug\Models\Painter\Painter;
use Btybug\btybug\Models\Routes;
use Illuminate\Support\ServiceProvider;


class BtybugServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/Lang', 'btybug');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'btybug');
        $this->app->register('Btybug\Uploads\Providers\ModuleServiceProvider');
        $this->app->register('Btybug\Console\Providers\ModuleServiceProvider');
        $this->app->register("Btybug\User\Providers\ModuleServiceProvider");
        $this->app->register("Btybug\Media\Providers\ModuleServiceProvider");
        $this->app->register('Btybug\FrontSite\Providers\ModuleServiceProvider');
        $this->app->register('Btybug\Framework\Providers\ModuleServiceProvider');
        $this->app->register('Btybug\Resources\Providers\ModuleServiceProvider');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/../standards/constants.php';
        $this->app->register(EventyServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

}

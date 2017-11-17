<?php

namespace Btybug\Framework\Providers;

use Illuminate\Support\ServiceProvider;
use Btybug\Framework\Models\Optimzation;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../' . DS . 'FwFunctions' . DS . 'functions.php';
        BBaddShortcode('FW-get-classes', 'FWgetClasses');
        BBaddShortcode('FW-get', 'FWget');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'framework');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'framework');

        $tabs = [
            'framework_settings' => [
                [
                    'title' => 'Backend',
                    'url' => '/admin/framework/settings',
                ],
                [
                    'title' => 'Frontend',
                    'url' => '/admin/framework/settings/frontend',
                ]
            ],
            'framework_assets' => [
               [
                    'title' => 'Js',
                    'url' => '/admin/framework/js',
                ],
                [
                    'title' => 'Css',
                    'url' => '/admin/framework/css',
                ],
                [
                    'title' => 'Fonts',
                    'url' => '/admin/framework/fonts',
                ]
            ]
        ];

        \Eventy::action('my.tab', $tabs);

        //TODO; remove when finish all
//        \Btybug\btybug\Models\Routes::registerPages('sahak.avatar/framework');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}

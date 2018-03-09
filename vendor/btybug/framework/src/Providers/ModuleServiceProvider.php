<?php

namespace Btybug\Framework\Providers;

use Btybug\Framework\Models\Optimzation;
use Illuminate\Support\ServiceProvider;

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

        \Eventy::action('admin.menus', [
            "title" => "Framework",
            "custom-link" => "#",
            "icon" => "fa fa-thumbs-o-up",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Css",
                    "custom-link" => "/admin/framework/css",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],
                [
                    "title" => "Css Classes",
                    "custom-link" => "/admin/framework/css-classes",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],
                [
                    "title" => "Component",
                    "custom-link" => "/admin/framework/component",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]
        ]);

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

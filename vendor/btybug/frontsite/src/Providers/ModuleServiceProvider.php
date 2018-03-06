<?php

namespace Btybug\FrontSite\Providers;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/Lang', 'manage');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'manage');

        $tubs = [
            'manage_settings' => [
                [
                    'title' => 'General',
                    'url' => '/admin/front-site/settings',
                ],
                [
                    'title' => 'Frontend',
                    'url' => '/admin/front-site/settings/frontend',
                ],
                [
                    'title' => 'Notifications',
                    'url' => '/admin/front-site/settings/notifications',
                ],
                [
                    'title' => 'URL menger',
                    'url' => '/admin/front-site/settings/url-menger',
                ],
                [
                    'title' => 'Admin Emails',
                    'url' => '/admin/front-site/settings/adminemails',
                ],
                [
                    'title' => 'Api settings',
                    'url' => '/admin/front-site/settings/api-settings',
                ],
                [
                    'title' => 'Language',
                    'url' => '/admin/front-site/settings/lang',
                ]
            ],
            'frontend_manage' => [

                [
                    'title' => 'Pages',
                    'url' => '/admin/front-site/structure/front-pages',
                ],
                [
                    'title' => 'Menus',
                    'url' => '/admin/front-site/structure/menus',
                ],
                [
                    'title' => 'Classify',
                    'url' => '/admin/front-site/structure/classify',
                ],
                [
                    'title' => 'Filters',
                    'url' => '/admin/front-site/structure/filters',
                ],
                [
                    'title' => 'Hooks',
                    'url' => '/admin/front-site/structure/hooks',
                ]
            ],
            'page_edit' => [
                [
                    'title' => 'Settings',
                    'url' => '/admin/front-site/structure/front-pages/settings/{id}',
                ], [
                    'title' => 'General',
                    'url' => '/admin/front-site/structure/front-pages/general/{id}',
                ],
            ],
            'manage_emails' => [
                [
                    'title' => 'Emails',
                    'url' => '/admin/front-site/emails/{id}',
                ], [
                    'title' => 'Settings',
                    'url' => '/admin/front-site/emails/settings',
                ],
            ]
        ];
        \Eventy::action('my.tab', $tubs);

        \Eventy::action('admin.menus', [
            "title" => "Front Site",
            "custom-link" => "#",
            "icon" => "fa fa-hand-lizard-o",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Structure",
                    "custom-link" => "/admin/front-site/structure",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ], [
                    "title" => "Settings",
                    "custom-link" => "/admin/front-site/settings",
                    "icon" => "fa fa-cog",
                    "is_core" => "yes"
                ], [
                    "title" => "Events",
                    "custom-link" => "/admin/front-site/event",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ],[
                    "title" => "Admin Events",
                    "custom-link" => "/admin/front-site/admin-events",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ], [
                    "title" => "Emails",
                    "custom-link" => "/admin/front-site/emails",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]
        ]);

          \Btybug\btybug\Models\Routes::registerPages('btybug/frontsite');

    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}

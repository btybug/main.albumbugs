<?php

namespace Btybug\FrontSite\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\AfterLoginEvent' => [
            'App\Listeners\LoginListener',
        ],
        'App\Events\AfterLogOutEvent' => [
            'App\Listeners\LogOutListener',
        ],
        'App\Events\FormSubmit' => [
            'App\Listeners\SubmitFormListener',
        ],
        'App\Events\CustomEvent' => [
            'App\Listeners\CustomEventLictner',
        ],
    ];

    protected $subscribe = [
        'App\Listeners\UserEventSubscriber',
        'App\Listeners\SubmitFormListener',
        'App\Listeners\CustomEventLictner',
        'App\Listeners\LoginListener',
        'App\Listeners\LogOutListener',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        \Subscriber::addEvent('After Login', 'App\Events\AfterLoginEvent',['id'=>22]);
        \Subscriber::addEvent('After Log out', 'App\Events\AfterLogOutEvent');
        \Subscriber::addEvent('on registred', 'Illuminate\Auth\Events\Registred');
        \Subscriber::addEvent('on Form Submit', 'App\Events\FormSubmit');
        \Subscriber::addEvent('on Page Create', 'App\Events\PageCreateEvent');


        \Subscriber::addProperty('Notification', 'Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@Notification');
        \Subscriber::addProperty('Dates Between', 'Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@DatesBetween');
        \Subscriber::addProperty('check User Age', 'Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@checkUserAge');
        \Subscriber::add('App\Events\FormSubmit', 'BtybugManage\Models\Emails@onFormSubmit', ['name' => 'value']);
//        \Subscriber::add('App\Events\AfterLoginEvent','Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@Notification', ['message' => 'Hi Abokamal','alert_class'=>'info']);
//        \Subscriber::add('App\Events\AfterLoginEvent','Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@Notification', ['message' => 'Hi Edo','alert_class'=>'success']);
//        \Subscriber::add('App\Events\AfterLoginEvent','Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@Notification', ['message' => 'Hi Ara','alert_class'=>'warning']);
        \Subscriber::add('App\Events\CustomEvent', 'Btybug\FrontSite\Models\Emails@test');

        parent::boot();


    }
}

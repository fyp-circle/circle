<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        'App\Events\MyEvent' => [
           'App\Listeners\CreateNotificationInDB',
        ],
        'App\Events\StalkingEvent' => [
            'App\Listeners\CreateStalkingNotification',
         ],

         'App\Events\SentRequestEventB' => [
            'App\Listeners\CreateSentRequestNotification',
         ],

         'App\Events\SentRequestEventF' => [
            'App\Listeners\CreateSentRequestNotificationF',
         ],

         'App\Events\CancelRequest' => [
            'App\Listeners\CreateCancelRequestNotification',
         ],

         'App\Events\AcceptRequest' => [
            'App\Listeners\CreateAcceptRequestNotification',
         ],

         'App\Events\RemoveRequest' => [
            'App\Listeners\CreateRemoveRequestNotification',
         ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

<?php

namespace App\Listeners;

use App\Events\MyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notif;

class CreateNotificationInDB
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MyEvent  $event
     * @return void
     */
    public function handle(MyEvent $event)
    {
        $notif = new Notif;
        $notif->title = $event->title;
        $notif->content= $event->content;
        $notif->read = 0;
        $notif->user_id = $event->dest_id;
        $notif->circle_id = $event->circle_id;
        $notif->save();
    }
}

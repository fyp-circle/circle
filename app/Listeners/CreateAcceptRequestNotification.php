<?php

namespace App\Listeners;

use App\Events\AcceptRequest;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notif;
use App\Connection;

class CreateAcceptRequestNotification
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
     * @param  AcceptRequest  $event
     * @return void
     */
    public function handle(AcceptRequest $event)
    {
        $notif = new Notif;
        $notif->title = $event->title;
        $notif->content= $event->content;
        $notif->read = 0;
        $notif->user_id = $event->dest_id;
        $notif->sender_id = $event->user_id;
        $notif->circle_id = $event->circle_id;
        $notif->save();
    }
}

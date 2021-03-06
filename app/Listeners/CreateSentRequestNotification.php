<?php

namespace App\Listeners;

use App\Events\SentRequestEventB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notif;
use App\Connection;

class CreateSentRequestNotification
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
     * @param  SentRequestEventB  $event
     * @return void
     */
    public function handle(SentRequestEventB $event)
    {
        $notif = new Notif;
        $notif->title = $event->title;
        $notif->content= $event->content;
        $notif->read = 0;
        $notif->user_id = $event->dest_id;
        $notif->sender_id = $event->user_id;
        $notif->circle_id = $event->circle_id;
        $notif->save();

        $connection = new Connection;
        $connection->user1_id = $event->user_id;
        $connection->user2_id= $event->dest_id;
        $connection->circle_id= $event->circle_id;
        $connection->approve = 0;
        $connection->con_ini= $event->user_id;
        $connection->save();
    }
}

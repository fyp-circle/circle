<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

use Auth;
use App\User;
use Carbon\Carbon;

class SentRequestEventB
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $content;
    public $title;
    public $user_id;
    public $dest_id;
    public $circle_id;
    public $created_at;
    public $sender;

    public function __construct($dest_id)
    {

        $this->title = "New Business Request.";
        $this->content = Auth::user()->business_user['name']." sent you a Request.";
        $this->user_id = Auth::user()->user_id;
        $this->circle_id = 3;
        $this->dest_id=$dest_id;
        $this->sender=Auth::user();
        $this->created_at=Carbon::now()->format('Y-m-d H:i:s');
            //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['user_id_'.$this->dest_id];
    }

    public function broadcastAs()
    {
        return 'br-event';
    }
}

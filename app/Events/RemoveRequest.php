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

class RemoveRequest implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;



    public $content;
    public $title;
    public $user_id;
    public $dest_id;
    public $circle_id;
    public $created_at;
    public $sender;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($dest_id,$circle_id)
    {
        switch ($circle_id) {
            case '1':
                $this->title = "Unfriended.";
                $this->content = Auth::user()->name." removed you from Friends Circle.";
                break;
            case '2':
                $this->title = "Removed From Family.";
                $this->content = Auth::user()->family_user->name." removed you from Family Circle.";
                break;
            case '3':
                $this->content = Auth::user()->business_user->name." disconnected you from Business Circle.";
                $this->title = "Disconnected.";
                break;
            default:
                # code...
                break;
        }

        $this->user_id = Auth::user()->user_id;
        $this->circle_id = $circle_id;
        $this->dest_id=$dest_id;
        $this->sender=Auth::user();
        $this->created_at=Carbon::now()->format('Y-m-d H:i:s');
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
      return 'my-event';
  }
}

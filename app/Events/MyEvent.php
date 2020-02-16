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

class MyEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $content;
  public $title;
  public $user_id;
  public $dest_id;
  public $circle_id;
  public $created_at;

  public function __construct($dest_id)
  {
      $this->title = "New Friend Request";
      $this->content = "This is my content.";
      $this->user_id = Auth::user()->user_id;
      $this->circle_id = 1;
      $this->dest_id=$dest_id;
      $this->created_at=Carbon::now()->format('Y-m-d H:i:s');
  }

  public function broadcastOn()
  {
      return ['user_id_'.$this->dest_id];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}

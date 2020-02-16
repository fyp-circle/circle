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

class MyEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public $user_id;
  public $username;

  public function __construct($message)
  {
      $this->message = $message;
      $this->user_id = Auth::user()->user_id;
      $this->username = Auth::user()->name;
  }

  public function broadcastOn()
  {
      return ['user_id_2'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Connection;
use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Message;


$factory->define(Connection::class, function (Faker $faker) {


    $c= new Connection;
    $c->user1_id=$faker->numberBetween($min = 1, $max = 50);
    $c->user2_id=$faker->numberBetween($min = 1, $max = 50);

    if ($c->user1_id==$c->user2_id) {
        while ($c->user2_id!=$c->user1_id) {
            $c->user2_id=$faker->numberBetween($min = 1, $max = 50);
        }
    }

    $c->approve=1;
    // $c->circle_id= $faker->numberBetween($min = 1, $max = 3);
    $c->circle_id=1;
    $c->conversation_id=factory(App\Conversation::class)->create([
        'user1_id' => $c->user1_id,
        'user2_id' => $c->user2_id,
        'circle_id' => $c->circle_id,
    ]);

    $c->created_at=Carbon::now()->format('Y-m-d H:i:s');

    $m = new Message;
    switch ($c->circle_id) {
        case 1:
            $m->content= "Welcome to My Friends Circle.";
            break;
        case 2:
            $m->content= "Welcome to My Family Circle.";
            break;
        case 3:
            $m->content= "Welcome to My Business Circle.";
            break;
        default:
            # code...
            break;
    }
    $m->conversation_id = $c->conversation_id->conversation_id;
    $m->sender_id =$c->user1_id;
    $m->save();

    return $c->toArray();
});

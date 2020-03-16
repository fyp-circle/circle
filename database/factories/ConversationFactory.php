<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Conversation::class, function (Faker $faker,$arr) {
    return [
        'user1_id'     => $arr["user1_id"],
        'user2_id'     =>  $arr["user2_id"],
        'circle_id'     =>  $arr["circle_id"],
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});

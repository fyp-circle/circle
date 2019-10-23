<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => Str::random(8),
        'content' => Str::random(30),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'circle_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});

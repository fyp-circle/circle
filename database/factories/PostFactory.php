<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>$faker->realText($maxNbChars = 10, $indexSize = 2),
        'content' => $faker->realText($maxNbChars = 100, $indexSize = 2) ,
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'circle_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // 'picture'=>'https://source.unsplash.com/random',
    ];
});

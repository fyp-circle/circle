<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' =>$faker->realText($maxNbChars = 10, $indexSize = 2),
        'content' => $faker->sentence() ,
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'circle_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // 'picture' => $faker->imageUrl(640, 480, 'cats', true, 'Faker'),
        // 'picture' => $faker->imageUrl($width = 640, $height = 480),
        // 'picture'=> $faker->image($dir = public_path('images/posts/Friend'), $width = 640, $height = 480),
        // 'picture'=>'https://source.unsplash.com/random',
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->unique()->phoneNumber,
        'country' => $faker->country,
        'city' => $faker->city,
        'password' => Hash::make('Fyp123Fyp'),
        'day' => $faker->numberBetween($min = 1, $max = 28),
        'month' => $faker->numberBetween($min = 1, $max = 12),
        'year' => $faker->numberBetween($min = 2000, $max = 2012),
        'about_me' => $faker->realText($maxNbChars = 150, $indexSize = 2),
        // 'profile_picture' => $faker->imageUrl($width = 640, $height = 480),
        // 'cover_picture' => $faker->imageUrl($width = 640, $height = 480),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});

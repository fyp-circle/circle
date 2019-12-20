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
        'country' => $faker->unique()->country,
        'city' => $faker->unique()->city,
        'password' => Hash::make('Fyp123Fyp'),
        'about_me' => $faker->realText($maxNbChars = 150, $indexSize = 2),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ];
});

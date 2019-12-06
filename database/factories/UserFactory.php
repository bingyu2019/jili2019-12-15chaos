<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(
    App\Models\User::class,
    function (Faker $faker) {
        $date_time = $faker->date.' '.$faker->time;

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'introduction' => $faker->sentence(),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];
    }
);





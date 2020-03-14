<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\Client::class, function (Faker $faker) {
    return [
        'name'                          => $faker->name,
        'first_name'                    => $faker->firstName,
        'last_name'                     => $faker->lastName,
        'username'                      => $faker->userName,
        'email'                         => $faker->companyEmail,
        'password'                      => bcrypt('secret'),
        'avatar'                        => '1',
        'currant_workspace'             => \App\Project\Workspace::inRandomOrder()->first()->id,
        'created_at'                    => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                    => $faker->date($format = 'Y-m-d'),
        'email_verified_at'             => $faker->date($format = 'Y-m-d'),
        'empresa'                       => env('EMP_PRINCIPAL', 'Ecuatask'),
    ];
});

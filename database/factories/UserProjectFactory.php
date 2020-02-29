<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\UserProject::class, function (Faker $faker) {
    return [
        'user_id'                            => \App\User::inRandomOrder()->first()->id,
        'project_id'                         => \App\Project\Project::inRandomOrder()->first()->id,
        'created_at'                         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                         => $faker->date($format = 'Y-m-d'),
    ];
});

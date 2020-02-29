<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\UserWorkspace::class, function (Faker $faker) {
    return [
        'user_id'                         => App\User::inRandomOrder()->first()->id,
        'workspace_id'                    => \App\Project\Workspace::inRandomOrder()->first()->id,
        'permission'                      => 'Owner',
        'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                      => $faker->date($format = 'Y-m-d'),
    ];
});

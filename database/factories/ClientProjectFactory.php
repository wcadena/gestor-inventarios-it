<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientProject;
use Faker\Generator as Faker;

$factory->define(\App\Project\ClientProject::class, function (Faker $faker) {
    return [
        'client_id'                          => \App\Project\Client::inRandomOrder()->first()->id,
        'project_id'                         => \App\Project\Project::inRandomOrder()->first()->id,
        'permission'                         => 'Owner',
        'created_at'                        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                        => $faker->date($format = 'Y-m-d'),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientWorkspace;
use Faker\Generator as Faker;

$factory->define(ClientWorkspace::class, function (Faker $faker) {
    return [
        'client_id'                         => \App\Project\Client::inRandomOrder()->first()->id,
        'workspace_id'                    => \App\Project\Workspace::inRandomOrder()->first()->id,
        'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                      => $faker->date($format = 'Y-m-d'),
    ];
});

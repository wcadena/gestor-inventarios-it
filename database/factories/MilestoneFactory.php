<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Milestone;
use Faker\Generator as Faker;

$factory->define(\App\Project\Milestone::class, function (Faker $faker) {
    return [


        'project_id'                         => \App\Project\Project::inRandomOrder()->first()->id,
        'title'                         => $faker->text,
        'status'                         => 'active',
        'cost'                         => $faker->numberBetween(1000, 1000 * 100),
        'summary'                         => $faker->text,
        'created_at'                        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                        => $faker->date($format = 'Y-m-d'),

    ];
});

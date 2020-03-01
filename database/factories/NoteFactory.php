<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\Note::class, function (Faker $faker) {
    return [

        'title'                              => $faker->text,
        'text'                               => $faker->text(189),
        'color'                              => $faker->randomElement(['bg-primary', 'bg-secondary', 'bg-info', 'bg-warning', 'bg-danger']),
        'workspace'                          => \App\Project\Workspace::inRandomOrder()->first()->id,
        'created_by'                         => \App\User::inRandomOrder()->first()->id,
        'created_at'                         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                         => $faker->date($format = 'Y-m-d'),
    ];
});

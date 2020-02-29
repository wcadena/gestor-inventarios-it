<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\Project::class, function (Faker $faker) {
    return [
        'name'                             => $kj2 = $faker->word,
        'status'                           => $faker->randomElement($array = ['Ongoing', 'Finished', 'OnHold']),
        'description'                      => $faker->text,
        'start_date'                       => \Carbon\Carbon::now(),
        'end_date'                         => $faker->date($format = 'Y-m-d', $min = 'now'),
        'budget'                           => $faker->numberBetween(1000, 1000 * 100),
        'workspace'                        => \App\Project\Workspace::inRandomOrder()->first()->id,
        'created_by'                       => App\User::inRandomOrder()->first()->id,
        'created_at'                       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                       => $faker->date($format = 'Y-m-d'),
    ];
});

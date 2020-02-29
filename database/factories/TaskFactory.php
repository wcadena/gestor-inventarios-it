<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\Task::class, function (Faker $faker) {
    return [

        'title'                                => $faker->text,
        'priority'                             => $faker->randomElement($array = ['Medium', 'High']),
        'description'                          => $faker->text(189),
        'due_date'                             => $faker->date($format = 'Y-m-d', $max = 'now'),
        'assign_to'                            => \App\User::inRandomOrder()->first()->id,
        'project_id'                           => \App\Project\Project::inRandomOrder()->first()->id,
        'milestone_id'                         => \App\Project\Milestone::inRandomOrder()->first()->id,
        'status'                               => $faker->randomElement($array = ['todo',            'in progress',            'review',            'done']),
        'order'                                => 0,
        'created_at'                           => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                           => $faker->date($format = 'Y-m-d'),
    ];
});

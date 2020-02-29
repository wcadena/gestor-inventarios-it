<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubTask;
use Faker\Generator as Faker;

$factory->define(\App\Project\SubTask::class, function (Faker $faker) {
    return [

        'name'                         => $faker->text(50),
        'due_date'                        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'task_id'                         => \App\Project\Task::inRandomOrder()->first()->id,
        'user_type'                         => $faker->randomElement($array = ['Client', 'User']),
        'created_by'                         => \App\User::inRandomOrder()->first()->id,
        'status'                         => 0,
        'created_at'                        => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                        => $faker->date($format = 'Y-m-d'),


    ];
});

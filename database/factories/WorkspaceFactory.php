<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Project\Workspace::class, function (Faker $faker) {
    return [
        'name'                            => $kj = $faker->word,
        'slug'                            => $kj,
        'created_by'                      => App\User::inRandomOrder()->first()->id,
        'lang'                            => app()->getLocale(),
        'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'                      => $faker->date($format = 'Y-m-d'),
    ];
});

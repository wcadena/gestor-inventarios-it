<?php

use Faker\Generator as Faker;
use App\Permission;

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'name' => null,
        'display_name' => null,
        'description' => null,
        'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

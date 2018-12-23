<?php

use App\Notification;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'type'            => null,
        'notifiable_id'   => null,
        'notifiable_type' => null,
        'data'            => null,
        'read_at'         => null,
        'created_at'      => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'      => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

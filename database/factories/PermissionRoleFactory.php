<?php

use Faker\Generator as Faker;
use App\PermissionRole;

$factory->define(PermissionRole::class, function (Faker $faker) {
    return [
        'permission_id' => null,
        'role_id' => null,
    ];
});

<?php

use App\PermissionRole;
use Faker\Generator as Faker;

$factory->define(PermissionRole::class, function (Faker $faker) {
    return [
        'permission_id' => null,
        'role_id'       => null,
    ];
});

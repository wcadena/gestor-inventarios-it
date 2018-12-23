<?php

/*
|--------------------------------------------------------------------------
| User Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'               => $faker->name,
        'first_name'         => $faker->firstName,
        'last_name'          => $faker->lastName,
        'rol'                => 'system',
        'username'           => $faker->userName,
        'email'              => $faker->companyEmail,
        'password'           => bcrypt('secret'),
        'created_at'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'empresa'            => env('EMP_PRINCIPAL', 'Ecuatask'),
        'token'              => App\User::generarVerificationToken(),
        'verification_token' => App\User::generarVerificationToken(),
        'verified'           => App\User::USUARIO_VERIFICADO,
    ];
});

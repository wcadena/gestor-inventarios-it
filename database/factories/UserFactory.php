<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name,
            'first_name'         => $this->faker->firstName,
            'last_name'          => $this->faker->lastName,
            'rol'                => 'system',
            'username'           => $this->faker->userName,
            'email'              => $this->faker->companyEmail,
            'password'           => bcrypt('secret'),
            'created_at'         => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'         => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'empresa'            => env('EMP_PRINCIPAL', 'Ecuatask'),
            'token'              => User::generarVerificationToken(),
            'verification_token' => User::generarVerificationToken(),
            'verified'           => User::USUARIO_VERIFICADO,
        ];
    }
}

<?php

namespace Database\Factories;

use App\InformeMantoPrevTec;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeMantoPrevTecFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeMantoPrevTec::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                User::factory()->create();

                return User::inRandomOrder()->first()->id;
            },
            'informe_manto_prev_id' => null,
            'created_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at'            => null,
        ];
    }
}

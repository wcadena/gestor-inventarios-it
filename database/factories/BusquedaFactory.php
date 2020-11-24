<?php

namespace Database\Factories;

use App\Models\Busqueda;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusquedaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Busqueda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                factory(App\Models\User::class, 1)->create();

                return App\Models\User::inRandomOrder()->first()->id;
            },
            'palabra_q'    => $this->faker->word,
            'instancia'    => $this->faker->word,
            'instancia_id' => $this->faker->randomDigit,
            'dato'         => $this->faker->word,
            'created_at'   => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'   => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at'   => null,
        ];
    }
}

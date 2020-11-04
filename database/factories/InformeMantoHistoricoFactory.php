<?php

namespace Database\Factories;

use App\InformeMantoHistorico;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeMantoHistoricoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeMantoHistorico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                factory(App\User::class, 1)->create();

                return App\User::inRandomOrder()->first()->id;
            },
            'informe_manto_prev_id' => null,
            'accion'                => null,
            'created_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'            => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at'            => null,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Bitacora;
use App\Models\Custodios;
use App\Models\Equipos;
use App\Models\ModeloEquipo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BitacoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bitacora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_equipos' => function () {
                factory(Equipos::class, 1)->create();

                return ModeloEquipo::inRandomOrder()->first()->id;
            },
            'titulo'        => $this->faker->title,
            'fecha_ingreso' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'custodio_id'   => function () {
                factory(Custodios::class, 1)->create();

                return Custodios::inRandomOrder()->first()->id;
            },
            'user_id' => function () {
                factory(User::class, 1)->create();

                return User::inRandomOrder()->first()->id;
            },
            'problema'   => $this->faker->text,
            'solucion'   => $this->faker->text,
            'estado'     => $this->faker->randomElement($array = ['enviado', 'recibido', 'en_reparacion', 'espera_repuesto', 'reparado', 'para_dar_baja', 'en_garantía']),
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deleted_at' => null,
        ];
    }
}

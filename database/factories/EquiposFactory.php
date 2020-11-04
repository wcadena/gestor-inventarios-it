<?php

namespace Database\Factories;

use App\Areas;
use App\Custodios;
use App\Equipos;
use App\Estaciones;
use App\ModeloEquipo;
use App\OrdenDeCompra;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Webpatser\Uuid\Uuid;

class EquiposFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipos::class;

    protected $area_id_glb9;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->area_id_glb9 = Areas::inRandomOrder()->first()->id;

        return [
            'modelo_equipo_id'         => function () {
                return ModeloEquipo::inRandomOrder()->first()->id;
            },
            'orden_de_compra_id'         => function () {
                return OrdenDeCompra::inRandomOrder()->first()->id;
            },
            'custodio_id'         => function () {
                return Custodios::inRandomOrder()->first()->id;
            },
            'estacione_id'         => function () {
                return Estaciones::inRandomOrder()->first()->id;
            },
            'area_id'         => function () {
                return $this->area_id_glb9;
            },
            'check_list_id'         => function () {
                \Illuminate\Support\Facades\Session::flash('Crear_checklist', 'Crear_checklist');
                $checklistmod = new \App\CheckList();
                $checklistmod->area_id = $this->area_id_glb9;
                $checklistmod->user_id = User::inRandomOrder()->first()->id;
                $checklistmod->id_check_lists = uniqid('CHK-');
                $checklistmod->unik_check_lists = Uuid::generate();
                $checklistmod->save();
                $dathui0091 = new \App\Http\Controllers\CheckListController();
                $utill77563 = $dathui0091->crearChecklist($this->area_id_glb9, $checklistmod->id);

                return $checklistmod->id;
            },
            'num_cajas'             => $this->faker->randomDigit,
            'sociedad'              => (env('EMP_PRINCIPAL', 'Ecuatask')),
            'no_serie'              => $this->faker->swiftBicNumber,
            'codigo_barras'         => $this->faker->ean13,
            'descripcion'           => $this->faker->text,
            'estado'                => $this->faker->randomElement($array = ['BUENO', 'MALO', 'NUEVO']),
            'estatus'               => $this->faker->randomElement($array = ['VIGENTE', 'BODEGA', 'BAJA']),
            'garantia'              => $this->faker->randomElement($array = ['SI', 'NO']),
            'observaciones'         => $this->faker->text,
        ];
    }
}

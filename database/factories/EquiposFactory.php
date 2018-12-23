<?php

use Faker\Generator as Faker;

$area_id_glb9;
$factory->define(App\Equipos::class, function (Faker $faker) {
    $this->area_id_glb9 = App\Areas::inRandomOrder()->first()->id;

    return [
        'modelo_equipo_id'         => function () {
            return App\ModeloEquipo::inRandomOrder()->first()->id;
        },
        'orden_de_compra_id'         => function () {
            return App\OrdenDeCompra::inRandomOrder()->first()->id;
        },
        'custodio_id'         => function () {
            return App\Custodios::inRandomOrder()->first()->id;
        },
        'estacione_id'         => function () {
            return App\Estaciones::inRandomOrder()->first()->id;
        },
        'area_id'         => function () {
            return $this->area_id_glb9;
        },
        'check_list_id'         => function () {
            \Illuminate\Support\Facades\Session::flash('Crear_checklist', 'Crear_checklist');
            $checklistmod = new \App\CheckList();
            $checklistmod->area_id = $this->area_id_glb9;
            $checklistmod->user_id = App\User::inRandomOrder()->first()->id;
            $checklistmod->id_check_lists = uniqid('CHK-');
            $checklistmod->unik_check_lists = Uuid::generate();
            $checklistmod->save();
            $dathui0091 = new \App\Http\Controllers\CheckListController();
            $utill77563 = $dathui0091->crearChecklist($this->area_id_glb9, $checklistmod->id);

            return $checklistmod->id;
        },
        'num_cajas'             => $faker->randomDigit,
        'sociedad'              => (env('EMP_PRINCIPAL', 'Ecuatask')),
        'no_serie'              => $faker->swiftBicNumber,
        'codigo_barras'         => $faker->ean13,
        'descripcion'           => $faker->text,
        'estado'                => $faker->randomElement($array = ['BUENO', 'MALO', 'NUEVO']),
        'estatus'               => $faker->randomElement($array = ['VIGENTE', 'BODEGA', 'BAJA']),
        'garantia'              => $faker->randomElement($array = ['SI', 'NO']),
        'observaciones'         => $faker->text,
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Equipos::class, function (Faker $faker) {
    return [
        'modelo_equipo_id'         =>function () {
            return App\ModeloEquipo::inRandomOrder()->first()->id;
        },
        'orden_de_compra_id'         =>function () {
            return App\OrdenDeCompra::inRandomOrder()->first()->id;
        },
        'custodio_id'         =>function () {
            return App\Custodios::inRandomOrder()->first()->id;
        },
        'estacione_id'         =>function () {
            return App\Estaciones::inRandomOrder()->first()->id;
        },
        'area_id'         =>function () {
            return App\Areas::inRandomOrder()->first()->id;
        },
        'check_list_id'         =>function () {
            return App\CheckList::inRandomOrder()->first()->id;
        },
        'num_cajas'         =>$faker->randomDigit             ,
        'sociedad'         =>'Avianca Ec',
        'no_serie'         =>$faker->swiftBicNumber          ,
        'codigo_barras'         =>$faker->ean13          ,
        'descripcion'         =>$faker->text,
        'estado'         =>$faker->randomElement($array = array ('BUENO', 'MALO', 'NUEVO')),
        'estatus'         =>$faker->randomElement($array = array ('VIGENTE', 'BODEGA', 'BAJA')),
        'garantia'         =>$faker->randomElement($array = array ('SI', 'NO')),
        'observaciones'         =>$faker->text,
    ];
});

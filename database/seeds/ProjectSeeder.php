<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*\Illuminate\Support\Facades\DB::table('workspaces')->insert([
            'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
            'name'                            => 'QA',
            'descripcion'                     => '',
            'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
            'orden'                           => 4,
            'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
            'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                      => $faker->date($format = 'Y-m-d'),
        ]);*/
    }
}

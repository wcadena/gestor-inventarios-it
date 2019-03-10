<?php

use Illuminate\Database\Seeder;

class InformeMantenimientoPreventivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::login(App\User::inRandomOrder()->first());
        $faker = \Faker\Factory::create();

        if (\App\InformeMantoPrevCate::where('categoria', '=', 'Informe')->first() == null) {
            \Illuminate\Support\Facades\DB::table('informe_manto_prev_cates')->insert([
                'categoria'        => 'Informe',
            ]);
        }
        if (App\Proyecto::where('name', '=', 'Sitio Web')->first() == null) {
            \Illuminate\Support\Facades\DB::table('proyectos')->insert([
                'name'                            => 'Sitio Web',
                'descripcion'                     => 'Sitio Web la la la',
                'decoracion'                      => '',
                'tipo'                            => 'lista', //lista por el momento debe ser el standard
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Sitio Web')->first()->id,
                'name'                            => 'Nueva funcionalidad Web y Mobil',
                'descripcion'                     => '',
                'tipo'                            => 'titulo', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 1,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Sitio Web')->first()->id,
                'name'                            => 'Urgente',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 2,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Sitio Web')->first()->id,
                'name'                            => 'Medio',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 3,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Sitio Web')->first()->id,
                'name'                            => 'Bajo',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 4,
                'principal'                       => 'si', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);
        }

        if (App\Proyecto::where('name', '=', 'Soporte IT')->first() == null) {
            \Illuminate\Support\Facades\DB::table('proyectos')->insert([
                'name'                            => 'Soporte IT',
                'descripcion'                     => 'Soporte IT bla bla bla',
                'decoracion'                      => '',
                'tipo'                            => 'lista', //lista por el momento debe ser el standard
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Soporte IT')->first()->id,
                'name'                            => 'Urgente',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 1,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Soporte IT')->first()->id,
                'name'                            => 'Medio',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 2,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Soporte IT')->first()->id,
                'name'                            => 'Bajo',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 3,
                'principal'                       => 'si', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);
        }

        if (App\Proyecto::where('name', '=', 'Desarrollo')->first() == null) {
            \Illuminate\Support\Facades\DB::table('proyectos')->insert([
                'name'                            => 'Desarrollo',
                'descripcion'                     => 'Desarrollo IT bla bla bla',
                'decoracion'                      => '',
                'tipo'                            => 'lista', //lista por el momento debe ser el standard
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
                'name'                            => 'Backlog',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 1,
                'principal'                       => 'si', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
                'name'                            => 'To do',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 2,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
                'name'                            => 'In Progress',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 3,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
                'name'                            => 'QA',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 4,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);

            \Illuminate\Support\Facades\DB::table('proyecto_seccions')->insert([
                'proyecto_id'                     => App\Proyecto::where('name', '=', 'Desarrollo')->first()->id,
                'name'                            => 'Done',
                'descripcion'                     => '',
                'tipo'                            => 'seccion', //es donde van los informes, si es titulo seria solo un titulo sin secciones, titulo es un titulo sin opciones solo es decorativo
                'orden'                           => 5,
                'principal'                       => 'no', //solo debe haber un principal, ya q la ide es q tome este cuando se crea un informe de bolada
                'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'                      => $faker->date($format = 'Y-m-d'),
            ]);
        }

        factory(App\InformeMantenimientoPreventivo::class, 2)->create();
    }
}

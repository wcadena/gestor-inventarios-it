<?php

use Illuminate\Database\Seeder;

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::login(App\User::inRandomOrder()->first());
        factory(App\Custodios::class, 5)->create();
        if (\App\Empresa::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->first() == null) {
            \Illuminate\Support\Facades\DB::table('empresas')->insert([
                'empresa'        => env('EMP_PRINCIPAL', 'Ecuatask'),
                'formula_codigo' => '/AV[a-zA-Z0-9]{8,10}/',
            ]);
        }
        if (App\Configuracion::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->Config('CUSTODIO_BODEGA') == null) {
            \Illuminate\Support\Facades\DB::table('configuracions')->insert([
                'id'                => 1,
                'atributo'          => 'CUSTODIO_BODEGA',
                'tipo'              => 'texto',
                'valores_fuente'    => 'FIJO',
                'fijo'              => 1,
                'valor'             => App\Custodios::inRandomOrder()->first()->id,
                'empresa'           => (env('EMP_PRINCIPAL', 'Ecuatask')),
            ]);
        }

        factory(App\Equipos::class, 10)->create();
        factory(App\User::class, 1)->create();
        $custodio = App\Configuracion::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->where('atributo', '=', 'CUSTODIO_BODEGA')->first();
        $custodio->valor = App\Custodios::inRandomOrder()->first()->id;
        $custodio->save();
    }
}

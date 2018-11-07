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
        if(\App\Empresa::where('empresa' ,'=','Avianca EC')->first() == null ){
            \Illuminate\Support\Facades\DB::table('empresas')->insert([
                'empresa' => 'Avianca EC',
                'formula_codigo' => '/AV[a-zA-Z0-9]{8,10}/',
            ]);
        }
        if(App\Configuracion::where('empresa' ,'=','Avianca EC')->Config('CUSTODIO_BODEGA') == null){
            \Illuminate\Support\Facades\DB::table('configuracions')->insert([
                'id'    => 1,
                'atributo'  => 'CUSTODIO_BODEGA',
                'tipo' => 'texto',
                'valores_fuente'    =>  'FIJO',
                'fijo'  =>  1,
                'valor' => null,
                'empresa'   =>  'Avianca Ec'
            ]);
        }
        factory(App\Custodios::class, 100)->create();
        factory(App\Equipos::class, 100)->create();
        factory(App\User::class, 1)->create();
    }
}

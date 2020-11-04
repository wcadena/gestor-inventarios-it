<?php
namespace Database\Seeders;

use App\Configuracion;
use App\Custodios;
use App\Empresa;
use App\Equipos;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::login(User::inRandomOrder()->first());
        Custodios::factory()->count(5)->create();
        if (Empresa::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->first() == null) {
            \Illuminate\Support\Facades\DB::table('empresas')->insert([
                'empresa'        => env('EMP_PRINCIPAL', 'Ecuatask'),
                'formula_codigo' => '/AV[a-zA-Z0-9]{8,10}/',
            ]);
        }
        if (Configuracion::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->Config('CUSTODIO_BODEGA') == null) {
            \Illuminate\Support\Facades\DB::table('configuracions')->insert([
                'id'                => 1,
                'atributo'          => 'CUSTODIO_BODEGA',
                'tipo'              => 'texto',
                'valores_fuente'    => 'FIJO',
                'fijo'              => 1,
                'valor'             => Custodios::inRandomOrder()->first()->id,
                'empresa'           => (env('EMP_PRINCIPAL', 'Ecuatask')),
            ]);
        }
        Equipos::factory()->count(5)->create();
        User::factory()->create();
        $custodio = Configuracion::where('empresa', '=', env('EMP_PRINCIPAL', 'Ecuatask'))->where('atributo', '=', 'CUSTODIO_BODEGA')->first();
        $custodio->valor = Custodios::inRandomOrder()->first()->id;
        $custodio->save();
    }
}

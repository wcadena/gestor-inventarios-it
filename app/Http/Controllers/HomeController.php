<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Configuracion;
use App\Custodios;
use App\Equipos;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $minutos    =       1;//30 minutos refresca la base
        $maquinas = Cache::remember('maquinas', $minutos, function () {
            return DB::table('equipos')->count();
        });
        $usuarios = Cache::remember('usuarios', $minutos, function () {
            return DB::table('users')->count();
        });

        $equipos_asignados = Cache::remember('equipos_asignados', $minutos, function () {
            $encargado = Configuracion::where('atributo','CUSTODIO_BODEGA')->get()->first()->valor;
            return DB::table('equipos')
                ->where('custodio_id','<>',$encargado)
                ->count();
        });

        $custodios = Cache::remember('custodios', $minutos, function () {
            $encargado = Configuracion::where('atributo','CUSTODIO_BODEGA')->get()->first()->valor;
            return Custodios::count();
        });

        $pie_estaciones = Cache::remember('pie_estaciones', $minutos, function () {
            return Equipos::select('estaciones.estacion', DB::raw('COUNT(estacione_id) as Contador'))
                ->join('estaciones', 'estaciones.id', '=', 'equipos.estacione_id')
                ->groupBy('estacione_id')
                ->get();
            /*
             * SELECT estaciones.estacion AS estacion, COUNT(estaciones.id) AS Contador
                FROM inventario3.equipos    equipos
                     INNER JOIN inventario3.estaciones estaciones
                        ON (equipos.estacione_id = estaciones.id)
                GROUP BY estaciones.estacion
             */
        });

        return view('adminlte::home', compact('maquinas','usuarios','equipos_asignados','custodios','pie_estaciones'));
    }
}
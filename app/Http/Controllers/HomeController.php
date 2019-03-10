<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Configuracion;
use App\Custodios;
use App\Equipos;
use App\OAuthApp;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

/**
 * Class HomeController.
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
        $this->middleware('auth')->only(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        if (URL::previous() == env('APP_URL').'/login') {
            $token_oauth = OAuthApp::where('id', '=', session('_token'))->first();

            if ($token_oauth != null && $token_oauth->esActivo()) {
                $query = http_build_query([
                    'client_id'     => $token_oauth->client_id,
                    'redirect_uri'  => env('APP_URL').'/callback',
                    'response_type' => 'code',
                    'scope'         => 'place-orders',
                ]);
                $redireccTOAut2 = env('APP_URL').'/oauth/authorize?'.$query;

                return redirect($redireccTOAut2);
            }
        }

        $minutos = 1; //30 minutos refresca la base
        $maquinas = Cache::remember('maquinas'.Auth::user()->getEmpresa(), $minutos, function () {
            return Equipos::count();
        });
        $usuarios = Cache::remember('usuarios'.Auth::user()->getEmpresa(), $minutos, function () {
            return User::count();
        });

        $equipos_asignados = Cache::remember('equipos_asignados'.Auth::user()->getEmpresa(), $minutos, function () {
            $encargado = Configuracion::where('atributo', 'CUSTODIO_BODEGA')->get()->first()->valor;

            return Equipos::where('custodio_id', '<>', $encargado)
                ->count();
        });

        $custodios = Cache::remember('custodios'.Auth::user()->getEmpresa(), $minutos, function () {
            $encargado = Configuracion::where('atributo', 'CUSTODIO_BODEGA')->get()->first()->valor;

            return Custodios::count();
        });

        $pie_estaciones = Cache::remember('pie_estaciones'.Auth::user()->getEmpresa(), $minutos, function () {
            return Equipos::select('estaciones.estacion', DB::raw('COUNT(estacione_id) as Contador'),
                DB::raw('MAX(estacione_id) as estacione_id'))
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

        return view('home', compact('maquinas', 'usuarios', 'equipos_asignados', 'custodios', 'pie_estaciones'));
    }
}

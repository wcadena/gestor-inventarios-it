<?php

namespace App\Http\Controllers;

use App\Busqueda;
use App\Custodios;
use App\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusquedaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('authEmp:administrador');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function busqueda(Request $request)
    {
        $reglas = [
            'q' => 'required',
        ];
        $this->validate($request, $reglas);
        Busqueda::where('id', 'like', '%%')->delete();
        $term = strtoupper($request->q) ?: '';
        $term = str_replace(' ', '%', "$term");
        $term_mat = strtok($term, '%');

        $this->busquedaCustodio($term, $term_mat);
        $this->busquedaEquipo($term, $term_mat);

        $busqueda = Busqueda::paginate(15);

        return view('directory.buscar.index', compact('busqueda'));
    }

    private function busquedaCustodio($term, $term_mat)
    {
        /*
                 * custodio
                 */

        $tags = Custodios::where('nombre_responsable', 'like', '%'.$term.'%')->
        orwhere('cargo', 'like', '%'.$term.'%')->
        orwhere('area_piso', 'like', '%'.$term.'%')->get();
        foreach ($tags as $tag) {
            $b = new Busqueda();
            $b->user_id = Auth::id();
            $b->palabra_q = $term;
            $b->instancia = 'Custodios';
            $b->instancia_id = $tag->id;

            $datoaux2 = '';
            $aux2 = strtoupper($tag->nombre_responsable);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->nombre_responsable;
            }
            $aux2 = strtoupper($tag->cargo);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->cargo;
            }
            $aux2 = strtoupper($tag->area_piso);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->area_piso;
            }

            $b->dato = $tag->nombre_responsable.' - '.$datoaux2;
            $b->save();
        }
        /*
         * fin custodio
         */
    }

    private function busquedaEquipo($term, $term_mat)
    {
        /*
                 * equipo
                 */
        $tags = Equipos::where('no_serie', 'like', '%'.$term.'%')->
        orwhere('codigo_barras', 'like', '%'.$term.'%')->
        orwhere('codigo_otro', 'like', '%'.$term.'%')->
        orwhere('descripcion', 'like', '%'.$term.'%')->
        orwhere('ip', 'like', '%'.$term.'%')->
        orwhere('codigo_avianca', 'like', '%'.$term.'%')->get();
        foreach ($tags as $tag) {
            $b = new Busqueda();
            $b->user_id = Auth::id();
            $b->palabra_q = $term;
            $b->instancia = 'ModeloEquipo';
            $b->instancia_id = $tag->id;
            $datoaux2 = '';
            $aux2 = strtoupper($tag->no_serie);

            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->no_serie;
            }
            $aux2 = strtoupper($tag->codigo_barras);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->codigo_barras;
            }
            $aux2 = strtoupper($tag->descripcion);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->descripcion;
            }
            $aux2 = strtoupper($tag->observaciones);
            if (str_contains($aux2, $term_mat)) {
                $datoaux2 = $datoaux2.$tag->observaciones;
            }

            $b->dato = $tag->no_serie.' - '.$tag->codigo_avianca.' - '.$datoaux2;
            $b->save();
        }
        /*
         * fin equipo
         */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Busqueda $busqueda)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

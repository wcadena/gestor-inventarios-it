<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Custodios;
use App\InformeMantenimientoPreventivo;
use App\InformeMantenimientoPreventivoCategoria;
use App\InformeMantenimientoPreventivoTecnico;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;

class InformeMantenimientoPreventivoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system;planta_fisica');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $informes = InformeMantenimientoPreventivo::orderby('id','desc')->paginate(15);

        return view('directory.informes.index', compact('informes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $custodios = Custodios::orderBy('nombre_responsable', 'asc')->pluck('nombre_responsable', 'id');
        $areas = Areas::orderBy('area', 'asc')->pluck('area', 'id');
        $categoria_mant = InformeMantenimientoPreventivoCategoria::orderBy('categoria', 'asc')->pluck('categoria', 'id');

        return view('directory.informes.create', compact('dtos', 'custodios', 'areas', 'categoria_mant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'fecha_solicitud'   => 'required',
            'requerimiento'     => 'required',
            'observacion'       => 'required',

        ];
        $this->validate($request, $reglas);

        try {
            DB::beginTransaction();
            //dd($request);
            $inf = InformeMantenimientoPreventivo::create($request->all());
            //////////////////////////////////////////////
            $tecnicos = Input::get('tecnicos');
            if (is_array($tecnicos)) {
                foreach ($tecnicos as $tecnico) {
                    $tecnico_x = User::findOrFail($tecnico)->toArray();

                    $tecnico_x['user_id']               = $tecnico_x['id'];
                    $tecnico_x['informe_manto_prev_id'] = $inf->id;
                    unset($tecnico['id']);
                    InformeMantenimientoPreventivoTecnico::create($tecnico);
                }
                // do stuff with checked friends
                Session::flash('flash_message', 'Tecnicos added!');
            }
            //////////////////////////////////////////////
            DB::commit();
            return redirect('informes');
        } catch (Exception $e) {
            DB::rollback();
        }

        Session::flash('flash_message', 'InformeMantenimientoPreventivo added!');

        return redirect('informes');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $informe = InformeMantenimientoPreventivo::findOrFail($id);

        return view('directory.informes.show', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $custodios = Custodios::orderBy('nombre_responsable', 'asc')->pluck('nombre_responsable', 'id');
        $areas = Areas::orderBy('area', 'asc')->pluck('area', 'id');
        $categoria_mant = InformeMantenimientoPreventivoCategoria::orderBy('categoria', 'asc')->pluck('categoria', 'id');

        $informe = InformeMantenimientoPreventivo::findOrFail($id);

        Session::put('informe_manto_prev_id', $informe->id);
        //$equipo_id = Session::get('informe_manto_prev_id');//para ver

        $tecnico = InformeMantenimientoPreventivoTecnico::where('informe_manto_prev_id', '=', $informe->id);

        return view('directory.informes.edit', compact('informe', 'custodios', 'areas', 'categoria_mant', 'tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $informe = InformeMantenimientoPreventivo::findOrFail($id);
        $informe->update($request->all());

        Session::flash('flash_message', 'InformeMantenimientoPreventivo updated!');

        return redirect('informes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        InformeMantenimientoPreventivo::destroy($id);

        Session::flash('flash_message', 'InformeMantenimientoPreventivo deleted!');

        return redirect('informes');
    }
}

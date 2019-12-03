<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\CheckList_OpcionesCheckList;
use App\Models\Custodios;
use App\Models\Equipos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class BitacoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $bitacora = Bitacora::paginate(15);
        //dd($bitacora);
        return view('directory.bitacora.index', compact('bitacora'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function create()
    {
        $equipo_id = Session::get('equipo_id');

        if ($equipo_id == null) {
            return redirect('equipos');
        }
        $equipo = Equipos::findOrFail($equipo_id);
        $custodio_id = $equipo->custodio_id;
        $user_id = Auth::id();
        $custodio = Custodios::orderBy('nombre_responsable', 'asc')->pluck('nombre_responsable', 'id');
        $usuario = User::orderBy('name', 'asc')->pluck('name', 'id');
        // dd($equipo);
        $dtos = [
            'custodio'=> $custodio,
            'usuario' => $usuario,
        ];

        return view('directory.bitacora.create', compact('dtos', 'equipo_id', 'custodio_id', 'user_id'));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->input('fecha_ingreso', Carbon::createFromFormat('d/m/Y', $request->get('fecha_ingreso')));

        $BI = Bitacora::create($request->all());
        //dd($BI);
        Session::flash('flash_message', 'Bitacora added!');

        $equipo_id = Session::get('equipo_id');

        if ($equipo_id == null) {
            return redirect('equipos');
        }

        $equipo = Equipos::findOrFail($equipo_id);
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $equipo->check_list_id)->paginate(200);

        $bitacora = Bitacora::where('id_equipos', '=', $equipo_id)->paginate(15);

        Session::put('equipo_id', $equipo_id);

        //return view('directory.equipos.show', compact('equipo','checklist_opcionescheck','bitacora'));
        //return redirect('bitacora');
        return Redirect::action('EquiposController@show', [$equipo_id]);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $bitacora = Bitacora::findOrFail($id);

        return view('directory.bitacora.show', compact('bitacora'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $custodio = Custodios::orderBy('nombre_responsable', 'asc')->pluck('nombre_responsable', 'id');
        $usuario = User::orderBy('name', 'asc')->pluck('name', 'id');
        // dd($equipo);
        $dtos = [
            'custodio'=> $custodio,
            'usuario' => $usuario,
        ];
        $bitacora = Bitacora::findOrFail($id);

        return view('directory.bitacora.edit', compact('bitacora', 'dtos'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        $bitacora = Bitacora::findOrFail($id);
        $request->input('fecha_ingreso', Carbon::createFromFormat('d/m/Y', $request->get('fecha_ingreso')));

        $bitacora->update($request->all());

        Session::flash('flash_message', 'Bitacora updated!');

        //return redirect('bitacora');
        return Redirect::action('EquiposController@show', [$bitacora->id_equipos]);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $bitacora = Bitacora::findOrFail($id);
        Bitacora::destroy($id);

        Session::flash('flash_message', 'Bitacora deleted!');

        //return redirect('bitacora');

        return Redirect::action('EquiposController@show', [$bitacora->id_equipos]);
    }
}

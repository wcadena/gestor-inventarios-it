<?php

namespace App\Http\Controllers;

use App\Models\InformeMantenimientoPreventivoTecnico;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class InformeMantenimientoPreventivoTecnicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tecnico = InformeMantenimientoPreventivoTecnico::paginate(15);

        return view('directory.tecnico.index', compact('tecnico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tecnico = User::orderBy('name', 'asc')->pluck('name', 'id');

        return view('directory.tecnico.create', compact('tecnico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $equipo_id = Session::get('equipo_id');

        if ($equipo_id == null) {
            return redirect('equipos');
        }

        $this->validate($request, [
            'user_id'               => 'required',
            'informe_manto_prev_id' => 'required',
        ]);

        InformeMantenimientoPreventivoTecnico::create($request->all());

        Session::flash('flash_message', 'InformeMantenimientoPreventivoTecnico added!');

        return redirect('tecnico');
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
        $tecnico = InformeMantenimientoPreventivoTecnico::findOrFail($id);

        return view('directory.tecnico.show', compact('tecnico'));
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
        $tecnico = InformeMantenimientoPreventivoTecnico::findOrFail($id);

        return view('directory.tecnico.edit', compact('tecnico'));
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
        $tecnico = InformeMantenimientoPreventivoTecnico::findOrFail($id);
        $tecnico->update($request->all());

        Session::flash('flash_message', 'InformeMantenimientoPreventivoTecnico updated!');

        return redirect('tecnico');
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
        InformeMantenimientoPreventivoTecnico::destroy($id);

        Session::flash('flash_message', 'InformeMantenimientoPreventivoTecnico deleted!');

        return redirect('tecnico');
    }
}

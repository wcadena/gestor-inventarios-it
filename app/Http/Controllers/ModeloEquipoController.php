<?php

namespace App\Http\Controllers;

use App\ModeloEquipo;
use Illuminate\Http\Request;
use Session;

class ModeloEquipoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $modelo = ModeloEquipo::paginate(15);

        return view('directory.modelo.index', compact('modelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'modelo'         => 'required',
            'fabricante'     => 'required',
            'garantia_anios' => 'required',
            'tipo_equipo'    => 'required',

        ];
        $this->validate($request, $reglas);

        ModeloEquipo::create($request->all());

        Session::flash('flash_message', 'ModeloEquipo added!');

        return redirect('modelo');
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
        $modelo = ModeloEquipo::findOrFail($id);

        return view('directory.modelo.show', compact('modelo'));
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
        $modelo = ModeloEquipo::findOrFail($id);

        return view('directory.modelo.edit', compact('modelo'));
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
        $reglas = [
            'modelo'         => 'required',
            'fabricante'     => 'required',
            'garantia_anios' => 'required',
            'tipo_equipo'    => 'required',

        ];
        $this->validate($request, $reglas);

        $modelo = ModeloEquipo::findOrFail($id);
        $modelo->update($request->all());

        Session::flash('flash_message', 'ModeloEquipo updated!');

        return redirect('modelo');
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
        ModeloEquipo::destroy($id);

        Session::flash('flash_message', 'ModeloEquipo deleted!');

        return redirect('modelo');
    }
}

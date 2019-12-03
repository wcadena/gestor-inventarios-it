<?php

namespace App\Http\Controllers;

use App\Models\Estaciones;
use Illuminate\Http\Request;
use Session;

class EstacionesController extends Controller
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
        $estaciones = Estaciones::paginate(15);

        return view('directory.estaciones.index', compact('estaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.estaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_largo' => 'required',
            'pais'         => 'required',
            'estacion'     => 'required',
            'estacion'     => 'required',
            'empresa'      => 'required',
        ]);
        Estaciones::create($request->all());

        Session::flash('flash_message', 'Estaciones added!');

        return redirect('estaciones');
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
        $estacione = Estaciones::findOrFail($id);

        return view('directory.estaciones.show', compact('estacione'));
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
        $estacione = Estaciones::findOrFail($id);

        return view('directory.estaciones.edit', compact('estacione'));
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
        $request->validate([
            'nombre_largo' => 'required',
            'pais'         => 'required',
            'estacion'     => 'required',
            'estacion'     => 'required',
            'empresa'      => 'required',
        ]);
        $estacione = Estaciones::findOrFail($id);
        $estacione->update($request->all());

        Session::flash('flash_message', 'Estaciones updated!');

        return redirect('estaciones');
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
        Estaciones::destroy($id);

        Session::flash('flash_message', 'Estaciones deleted!');

        return redirect('estaciones');
    }
}

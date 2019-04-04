<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\ProyectoSeccion;
use Illuminate\Http\Request;

class ProyectoSeccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, Proyecto $proyecto)
    {
        $keyword = $request->get('search');

        if (!empty($keyword)) {
            $proyecto_seccion = ProyectoSeccion::ProyectoId($proyecto->id)->latest()->get();
        } else {
            $proyecto_seccion = ProyectoSeccion::ProyectoId($proyecto->id)->latest()->get();
        }

        return view('directory.proyecto_seccion.index', compact('proyecto_seccion', 'proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Proyecto $proyecto)
    {
        return view('directory.proyecto_seccion.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, Proyecto $proyecto)
    {
        $requestData = $request->all();

        if (is_null($requestData['orden'])) {
            $requestData['orden'] = $proyecto->proyectoSeccions->max('orden') + 1;
        }

        ProyectoSeccion::create($requestData);

        return redirect()->route('proyecto.proyecto_seccion.index', [$proyecto])->with('flash_message', 'ProyectoSeccion added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Proyecto $proyecto, ProyectoSeccion $proyectoSeccion)
    {
        return view('directory.proyecto_seccion.show', compact('proyectoSeccion', 'proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Proyecto $proyecto, ProyectoSeccion $proyecto_seccion)
    {
        return view('directory.proyecto_seccion.edit', compact('proyecto_seccion', 'proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Proyecto $proyecto, ProyectoSeccion $proyectoSeccion)
    {
        $requestData = $request->all();

        $proyectoSeccion->update($requestData);

        return redirect()->route('proyecto.proyecto_seccion.index', [$proyecto])->with('flash_message', 'ProyectoSeccion updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id, ProyectoSeccion $proyecto_seccion)
    {
        $proyecto_seccion->delete();

        return redirect()->route('proyecto.proyecto_seccion.index', [$proyecto_seccion->proyecto])->with('flash_message', 'ProyectoSeccion deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Areas;
use App\OpcionesCheckList;
use Illuminate\Http\Request;
use Session;

class OpcionesCheckListController extends Controller
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
        $opciones_check = OpcionesCheckList::paginate(15);

        return view('directory.opciones_check.index', compact('opciones_check'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $areas = Areas::pluck('area', 'id');

        return view('directory.opciones_check.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'atributo' => 'required',
        ]);

        OpcionesCheckList::create($request->all());

        Session::flash('flash_message', 'OpcionesCheckList added!');

        return redirect('opciones_check');
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
        $opciones_check = OpcionesCheckList::findOrFail($id);

        return view('directory.opciones_check.show', compact('opciones_check'));
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
        $areas = Areas::pluck('area', 'id');
        $opciones_check = OpcionesCheckList::findOrFail($id);
        $opciones_check->extras2 = $areas;

        return view('directory.opciones_check.edit', compact('opciones_check'));
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
        $opciones_check = OpcionesCheckList::findOrFail($id);
        $opciones_check->update($request->all());

        Session::flash('flash_message', 'OpcionesCheckList updated!');

        return redirect('opciones_check');
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
        OpcionesCheckList::destroy($id);

        Session::flash('flash_message', 'OpcionesCheckList deleted!');

        return redirect('opciones_check');
    }
}

<?php

namespace App\Http\Controllers;

use App\OrdenDeCompra;
use Illuminate\Http\Request;
use Session;

class OrdenDeCompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:;administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orden = OrdenDeCompra::paginate(15);

        return view('directory.orden.index', compact('orden'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.orden.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ordenCompra' => 'required',
        ]);
        OrdenDeCompra::create($request->all());

        Session::flash('flash_message', 'OrdenDeCompra added!');

        return redirect('orden');
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
        $orden = OrdenDeCompra::findOrFail($id);

        return view('directory.orden.show', compact('orden'));
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
        $orden = OrdenDeCompra::findOrFail($id);

        return view('directory.orden.edit', compact('orden'));
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
        $orden = OrdenDeCompra::findOrFail($id);
        $orden->update($request->all());

        Session::flash('flash_message', 'OrdenDeCompra updated!');

        return redirect('orden');
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
        OrdenDeCompra::destroy($id);

        Session::flash('flash_message', 'OrdenDeCompra deleted!');

        return redirect('orden');
    }
}

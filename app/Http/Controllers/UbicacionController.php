<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;
use Session;

class UbicacionController extends Controller
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
        $ubicacion = Ubicacion::paginate(15);

        return view('directory.ubicacion.index', compact('ubicacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.ubicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'edificio' => 'required',
            'piso'     => 'required',
            'imagen'   => 'required',
        ]);

        $ubica = $request->all();
        $ubica['imagen'] = $request->imagen->store('', 'images');

        Ubicacion::create($ubica);

        Session::flash('flash_message', 'Ubicacion added!');

        return redirect('ubicacion');
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
        $ubicacion = Ubicacion::findOrFail($id);

        return view('directory.ubicacion.show', compact('ubicacion'));
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
        $ubicacion = Ubicacion::findOrFail($id);

        return view('directory.ubicacion.edit', compact('ubicacion'));
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
            'edificio' => 'required',
            'piso'     => 'required',

        ]);

        $ubicacion = Ubicacion::findOrFail($id);

        $ubica = $request->all();
        if ($request->imagen != null) {
            $ubica['imagen'] = $request->imagen->store('', 'images');
        } else {
            $ubica['imagen'] = $ubicacion->imagen;
        }

        $ubicacion->update($ubica);

        Session::flash('flash_message', 'Ubicacion updated!');

        return redirect('ubicacion');
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
        Ubicacion::destroy($id);

        Session::flash('flash_message', 'Ubicacion deleted!');

        return redirect('ubicacion');
    }

    public function daImagen(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $puesto = Ubicacion::findOrFail($request->id);

        return $puesto->imagen;
    }
}

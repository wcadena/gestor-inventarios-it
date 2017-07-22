<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ubicacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UbicacionController extends Controller
{

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
        
        Ubicacion::create($request->all());

        Session::flash('flash_message', 'Ubicacion added!');

        return redirect('ubicacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->update($request->all());

        Session::flash('flash_message', 'Ubicacion updated!');

        return redirect('ubicacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Ubicacion::destroy($id);

        Session::flash('flash_message', 'Ubicacion deleted!');

        return redirect('ubicacion');
    }

}

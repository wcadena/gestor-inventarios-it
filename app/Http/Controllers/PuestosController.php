<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Puesto;
use App\Ubicacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PuestosController extends Controller
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
        $puesto = Puesto::paginate(15);

        return view('directory.puesto.index', compact('puesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.puesto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Puesto::create($request->all());

        Session::flash('flash_message', 'Puesto added!');

        return redirect('puesto');
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
        $puesto = Puesto::findOrFail($id);

        return view('directory.puesto.show', compact('puesto'));
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
        $puesto = Puesto::findOrFail($id);

        return view('directory.puesto.edit', compact('puesto'));
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
        
        $puesto = Puesto::findOrFail($id);
        $puesto->update($request->all());

        Session::flash('flash_message', 'Puesto updated!');

        return redirect('puesto');
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
        Puesto::destroy($id);

        Session::flash('flash_message', 'Puesto deleted!');

        return redirect('puesto');
    }



}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Rol;
use Illuminate\Http\Request;
use Session;

class RolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rol = Rol::paginate(15);

        return view('directory.rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        Rol::create($request->all());

        Session::flash('flash_message', '¡Rol añadido!');

        return redirect('rol');
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
        $rol = Rol::findOrFail($id);

        return view('directory.rol.show', compact('rol'));
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
        $rol = Rol::findOrFail($id);

        return view('directory.rol.edit', compact('rol'));
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

        $rol = Rol::findOrFail($id);
        $rol->update($request->all());

        Session::flash('flash_message', '¡Rol actualizado!');

        return redirect('rol');
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
        Rol::destroy($id);

        Session::flash('flash_message', '¡Rol Borrado!');

        return redirect('rol');
    }
}
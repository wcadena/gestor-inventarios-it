<?php

namespace App\Http\Controllers;

use App\Permiso;
use Illuminate\Http\Request;
use Session;

class PermisoController extends Controller
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
        $permiso = Permiso::paginate(15);

        return view('directory.permiso.index', compact('permiso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.permiso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Permiso::create($request->all());

        Session::flash('flash_message', '¡Permiso añadido!');

        return redirect('permiso');
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
        $permiso = Permiso::findOrFail($id);

        return view('directory.permiso.show', compact('permiso'));
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
        $permiso = Permiso::findOrFail($id);

        return view('directory.permiso.edit', compact('permiso'));
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
        $permiso = Permiso::findOrFail($id);
        $permiso->update($request->all());

        Session::flash('flash_message', '¡Permiso actualizado!');

        return redirect('permiso');
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
        Permiso::destroy($id);

        Session::flash('flash_message', '¡Permiso Borrado!');

        return redirect('permiso');
    }
}

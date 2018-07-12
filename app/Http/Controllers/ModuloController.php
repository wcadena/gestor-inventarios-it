<?php

namespace App\Http\Controllers;

use App\Modulo;
use Illuminate\Http\Request;
use Session;

class ModuloController extends Controller
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
        $modulo = Modulo::paginate(15);

        return view('directory.modulo.index', compact('modulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.modulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Modulo::create($request->all());

        Session::flash('flash_message', '¡Modulo añadido!');

        return redirect('modulo');
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
        $modulo = Modulo::findOrFail($id);

        return view('directory.modulo.show', compact('modulo'));
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
        $modulo = Modulo::findOrFail($id);

        return view('directory.modulo.edit', compact('modulo'));
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
        $modulo = Modulo::findOrFail($id);
        $modulo->update($request->all());

        Session::flash('flash_message', '¡Modulo actualizado!');

        return redirect('modulo');
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
        Modulo::destroy($id);

        Session::flash('flash_message', '¡Modulo Borrado!');

        return redirect('modulo');
    }
}

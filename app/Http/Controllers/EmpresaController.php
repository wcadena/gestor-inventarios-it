<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmpresaController extends Controller
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
        $empresa = Empresa::paginate(15);

        return view('directory.empresa.index', compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $modulo = Empresa::all();
        /* foreach($modulo AS $item){
             dd($item->permisos);
         }*/

        return view('directory.empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'empresa'        => 'required|max:255',
            'formula_codigo' => 'required',
        ]);
        $rol = Empresa::create($request->all());
        $rol->save();
        //////////////////////////////////////////////
        Session::flash('flash_message', 'Empresa added!');

        return redirect('empresa');
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
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();

        return view('directory.empresa.show', compact('empresa'));
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
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();

        return view('directory.empresa.edit', compact('empresa'));
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
        $this->validate($request, [
            'empresa'        => 'required|max:255',
            'formula_codigo' => 'required',
        ]);
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();
        $empresa->update($request->all());
        /////////////////////////////////////////
        Session::flash('flash_message', 'Permisos Rol updated!');

        return redirect('empresa');
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
        Empresa::destroy($id);

        Session::flash('flash_message', '¡Empresa Borrado!');

        return redirect('empresa');
    }
}

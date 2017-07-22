<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Motivos_Denuncias;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MotivosDenunciasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:;;system');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $motivo_denuncias = Motivos_Denuncias::paginate(15);

        return view('directory.motivo_denuncias.index', compact('motivo_denuncias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.motivo_denuncias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Motivos_Denuncias::create($request->all());

        Session::flash('flash_message', 'Motivos_Denuncias added!');

        return redirect('motivo_denuncias');
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
        $motivo_denuncia = Motivos_Denuncias::findOrFail($id);

        return view('directory.motivo_denuncias.show', compact('motivo_denuncia'));
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
        $motivo_denuncia = Motivos_Denuncias::findOrFail($id);

        return view('directory.motivo_denuncias.edit', compact('motivo_denuncia'));
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
        
        $motivo_denuncia = Motivos_Denuncias::findOrFail($id);
        $motivo_denuncia->update($request->all());

        Session::flash('flash_message', 'Motivos_Denuncias updated!');

        return redirect('motivo_denuncias');
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
        Motivos_Denuncias::destroy($id);

        Session::flash('flash_message', 'Motivos_Denuncias deleted!');

        return redirect('motivo_denuncias');
    }

}

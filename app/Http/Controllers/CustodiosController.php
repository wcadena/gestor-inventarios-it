<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Custodios;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CustodiosController extends Controller
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
        $custodio = Custodios::paginate(15);

        return view('directory.custodio.index', compact('custodio'));
    }

    public function indexnotificaciones()
    {
        $custodio = Custodios::notificar()->paginate(100);

        return view('directory.custodio.indexnotificar', compact('custodio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $areas = Areas::orderBy('area','asc')->pluck('area','area');
        return view('directory.custodio.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'ciudad' => 'required',
            'direccion' => 'required',
            'documentoIdentificacion' => 'required',
            'cargo' => 'required',
            'compania' => 'required',
            'telefono' => 'required',
            'nombre_responsable' => 'required',
            'area_piso' => 'required',
            'email' => 'required',

        ];
        $this->validate($request, $reglas);
        
        Custodios::create($request->all());

        Session::flash('flash_message', 'Custodios added!');

        return redirect('custodio');
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

        $custodio = Custodios::find($id);
        if ($custodio == null){
            Session::flash('flash_message', 'Custodio no encontrado!');
            return redirect('custodio');
        }

        return view('directory.custodio.show', compact('custodio'));
    }
    public function show_custom($id)
    {
        $custodio = Custodios::findOrFail($id);
        $custodios = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');

        return view('directory.custodio.show_custom', compact('custodio','custodios'));
    }

    public function show_custom_post(Request $request)
    {
        dd($request);
        //$custodio = Custodios::findOrFail($id);

        //return view('directory.custodio.show_custom', compact('custodio'));
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

        $custodio = Custodios::find($id);
        if ($custodio == null){
            Session::flash('flash_message', 'Custodio no encontrado!');
            return redirect('custodio');
        }

        return view('directory.custodio.edit', compact('custodio'));
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
        $reglas = [
            'pais' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'documentoIdentificacion' => 'required',
            'cargo' => 'required',
            'compania' => 'required',
            'telefono' => 'required',
            'nombre_responsable' => 'required',
            'area_piso' => 'required',
            'email' => 'required',

        ];
        $this->validate($request, $reglas);
        
        $custodio = Custodios::findOrFail($id);
        $custodio->update($request->all());

        Session::flash('flash_message', 'Custodios updated!');

        return redirect('custodio');
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
        Custodios::destroy($id);

        Session::flash('flash_message', 'Custodios deleted!');

        return redirect('custodio');
    }

}

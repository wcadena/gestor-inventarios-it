<?php

namespace App\Http\Controllers;

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
        $this->middleware('authEmp:usuario;administrador;system');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.custodio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
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

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Configuracion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ConfiguracionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $config = Configuracion::paginate(15);

        return view('directory.config.index', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Configuracion::create($request->all());

        Session::flash('flash_message', 'Configuracion added!');

        return redirect('config');
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
        $config = Configuracion::findOrFail($id);

        return view('directory.config.show', compact('config'));
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
        $config = Configuracion::findOrFail($id);

        return view('directory.config.edit', compact('config'));
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
        
        $config = Configuracion::findOrFail($id);
        $config->update($request->all());

        Session::flash('flash_message', 'Configuracion updated!');

        return redirect('config');
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
        Configuracion::destroy($id);

        Session::flash('flash_message', 'Configuracion deleted!');

        return redirect('config');
    }

}

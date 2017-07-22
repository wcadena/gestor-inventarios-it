<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Denuncias;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class DenunciasController extends Controller
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
        $denuncias = Denuncias::paginate(15);

        return view('directory.denuncias.index', compact('denuncias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.denuncias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Denuncias::create($request->all());

        Session::flash('flash_message', 'Denuncias added!');

        return redirect('denuncias');
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
        $denuncia = Denuncias::findOrFail($id);

        return view('directory.denuncias.show', compact('denuncia'));
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
        $denuncia = Denuncias::findOrFail($id);

        return view('directory.denuncias.edit', compact('denuncia'));
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
        
        $denuncia = Denuncias::findOrFail($id);
        $denuncia->update($request->all());

        Session::flash('flash_message', 'Denuncias updated!');

        return redirect('denuncias');
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
        Denuncias::destroy($id);

        Session::flash('flash_message', 'Denuncias deleted!');

        return redirect('denuncias');
    }

}

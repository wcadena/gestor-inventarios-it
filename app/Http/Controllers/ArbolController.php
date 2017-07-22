<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Arbol;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ArbolController extends Controller
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
        $arbol = Arbol::paginate(15);

        return view('directory.arbol.index', compact('arbol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.arbol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        
        Arbol::create($request->all());

        Session::flash('flash_message', 'Arbol added!');

        return redirect('arbol');
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
        $arbol = Arbol::findOrFail($id);

        return view('directory.arbol.show', compact('arbol'));
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
        $arbol = Arbol::findOrFail($id);

        return view('directory.arbol.edit', compact('arbol'));
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
        
        $arbol = Arbol::findOrFail($id);
        $arbol->update($request->all());

        Session::flash('flash_message', 'Arbol updated!');

        return redirect('arbol');
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
        Arbol::destroy($id);

        Session::flash('flash_message', 'Arbol deleted!');

        return redirect('arbol');
    }

}

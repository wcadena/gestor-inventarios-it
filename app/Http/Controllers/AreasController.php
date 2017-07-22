<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Areas;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AreasController extends Controller
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
        $areas = Areas::paginate(15);

        return view('directory.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Areas::create($request->all());

        Session::flash('flash_message', 'Areas added!');

        return redirect('areas');
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
        $area = Areas::findOrFail($id);

        return view('directory.areas.show', compact('area'));
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
        $area = Areas::findOrFail($id);

        return view('directory.areas.edit', compact('area'));
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
        
        $area = Areas::findOrFail($id);
        $area->update($request->all());

        Session::flash('flash_message', 'Areas updated!');

        return redirect('areas');
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
        Areas::destroy($id);

        Session::flash('flash_message', 'Areas deleted!');

        return redirect('areas');
    }

}

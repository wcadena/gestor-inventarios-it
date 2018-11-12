<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProyectoSeccion;
use Illuminate\Http\Request;

class ProyectoSeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request,$proyecto_id)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $proyecto_seccion = ProyectoSeccion::ProyectoId($proyecto_id)->latest()->paginate($perPage);
        } else {
            $proyecto_seccion = ProyectoSeccion::ProyectoId($proyecto_id)->latest()->paginate($perPage);
        }

        return view('directory.proyecto_seccion.index', compact('proyecto_seccion','proyecto_id'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($proyecto_id)
    {
        return view('directory.proyecto_seccion.create', compact('proyecto_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request,$proyecto_id)
    {
        
        $requestData = $request->all();
        
        ProyectoSeccion::create($requestData);

        return redirect('proyecto_seccion')->with('flash_message', 'ProyectoSeccion added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id,$proyecto_id)
    {
        $proyecto_seccion = ProyectoSeccion::findOrFail($id);

        return view('directory.proyecto_seccion.show', compact('proyecto_seccion','proyecto_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id,$proyecto_id)
    {
        $proyecto_seccion = ProyectoSeccion::findOrFail($id);

        return view('directory.proyecto_seccion.edit', compact('proyecto_seccion','proyecto_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id,$proyecto_id)
    {
        
        $requestData = $request->all();
        
        $proyecto_seccion = ProyectoSeccion::findOrFail($id);
        $proyecto_seccion->update($requestData);

        return redirect('proyecto_seccion')->with('flash_message', 'ProyectoSeccion updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id,$proyecto_id)
    {
        ProyectoSeccion::destroy($id);

        return redirect('proyecto_seccion')->with('flash_message', 'ProyectoSeccion deleted!');
    }
}

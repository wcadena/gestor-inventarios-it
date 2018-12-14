<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $proyecto = Proyecto::latest()->paginate($perPage);
        } else {
            $proyecto = Proyecto::latest()->paginate($perPage);
        }

        return view('directory.proyecto.index', compact('proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('directory.proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        Proyecto::create($requestData);

        return redirect('proyecto')->with('flash_message', 'Proyecto added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('directory.proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        return view('directory.proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($requestData);

        return redirect('proyecto')->with('flash_message', 'Proyecto updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Proyecto::destroy($id);

        return redirect('proyecto')->with('flash_message', 'Proyecto deleted!');
    }
}

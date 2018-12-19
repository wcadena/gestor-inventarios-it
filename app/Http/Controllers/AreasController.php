<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;
use Session;

class AreasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $areas = Areas::paginate(15);

        return view('directory.areas.index', compact('areas'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.areas.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'area' => 'required',
        ]);
        Areas::create($request->all());

        Session::flash('flash_message', 'Areas added!');

        return redirect('areas');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $area = Areas::findOrFail($id);

        return view('directory.areas.show', compact('area'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $area = Areas::findOrFail($id);

        return view('directory.areas.edit', compact('area'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'area' => 'required',
        ]);
        $area = Areas::findOrFail($id);
        $area->update($request->all());

        Session::flash('flash_message', 'Areas updated!');

        return redirect('areas');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Areas::destroy($id);

        Session::flash('flash_message', 'Areas deleted!');

        return redirect('areas');
    }
}

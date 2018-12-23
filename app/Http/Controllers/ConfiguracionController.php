<?php

namespace App\Http\Controllers;

use App\Configuracion;
use Illuminate\Http\Request;
use Session;

class ConfiguracionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $config = Configuracion::paginate(15);

        return view('directory.config.index', compact('config'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.config.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Configuracion::create($request->all());

        Session::flash('flash_message', 'Configuracion added!');

        return redirect('config');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $config = Configuracion::findOrFail($id);

        return view('directory.config.show', compact('config'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $config = Configuracion::findOrFail($id);

        return view('directory.config.edit', compact('config'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $config = Configuracion::findOrFail($id);
        $config->update($request->all());

        Session::flash('flash_message', 'Configuracion updated!');

        return redirect('config');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Configuracion::destroy($id);

        Session::flash('flash_message', 'Configuracion deleted!');

        return redirect('config');
    }
}

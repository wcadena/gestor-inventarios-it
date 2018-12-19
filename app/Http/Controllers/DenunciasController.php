<?php

namespace App\Http\Controllers;

use App\Denuncias;
use Illuminate\Http\Request;
use Session;

class DenunciasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $denuncias = Denuncias::paginate(15);

        return view('directory.denuncias.index', compact('denuncias'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.denuncias.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Denuncias::create($request->all());

        Session::flash('flash_message', 'Denuncias added!');

        return redirect('denuncias');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $denuncia = Denuncias::findOrFail($id);

        return view('directory.denuncias.show', compact('denuncia'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $denuncia = Denuncias::findOrFail($id);

        return view('directory.denuncias.edit', compact('denuncia'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $denuncia = Denuncias::findOrFail($id);
        $denuncia->update($request->all());

        Session::flash('flash_message', 'Denuncias updated!');

        return redirect('denuncias');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Denuncias::destroy($id);

        Session::flash('flash_message', 'Denuncias deleted!');

        return redirect('denuncias');
    }
}

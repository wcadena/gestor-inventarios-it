<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmpresaController extends Controller
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
        $empresa = Empresa::paginate(15);

        return view('directory.empresa.index', compact('empresa'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $modulo = Empresa::all();
        /* foreach($modulo AS $item){
             dd($item->permisos);
         }*/

        return view('directory.empresa.create', compact('empresa'));
    }

    /**
     * @param Request $request
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'empresa'        => 'required|max:255',
            'formula_codigo' => 'required',
        ]);
        $rol = Empresa::create($request->all());
        $rol->save();
        //////////////////////////////////////////////
        Session::flash('flash_message', 'Empresa added!');

        return redirect('empresa');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();

        return view('directory.empresa.show', compact('empresa'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();

        return view('directory.empresa.edit', compact('empresa'));
    }

    /***
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'empresa'        => 'required|max:255',
            'formula_codigo' => 'required',
        ]);
        $empresa = Empresa::where('empresa', '=', $id)->firstOrFail();
        $empresa->update($request->all());
        /////////////////////////////////////////
        Session::flash('flash_message', 'Permisos Rol updated!');

        return redirect('empresa');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Empresa::destroy($id);

        Session::flash('flash_message', '¡Empresa Borrado!');

        return redirect('empresa');
    }
}

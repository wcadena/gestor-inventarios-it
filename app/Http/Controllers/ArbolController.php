<?php

namespace App\Http\Controllers;

use App\Arbol;
use Illuminate\Http\Request;
use Session;

class ArbolController extends Controller
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
        $arbol = Arbol::paginate(15);

        return view('directory.arbol.index', compact('arbol'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.arbol.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Arbol::create($request->all());

        Session::flash('flash_message', 'Arbol added!');

        return redirect('arbol');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $arbol = Arbol::findOrFail($id);

        return view('directory.arbol.show', compact('arbol'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $arbol = Arbol::findOrFail($id);

        return view('directory.arbol.edit', compact('arbol'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $arbol = Arbol::findOrFail($id);
        $arbol->update($request->all());

        Session::flash('flash_message', 'Arbol updated!');

        return redirect('arbol');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Arbol::destroy($id);

        Session::flash('flash_message', 'Arbol deleted!');

        return redirect('arbol');
    }
}

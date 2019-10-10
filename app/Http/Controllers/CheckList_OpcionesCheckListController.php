<?php

namespace App\Http\Controllers;

use App\CheckList_OpcionesCheckList;
use Illuminate\Http\Request;
use Session;

class CheckList_OpcionesCheckListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::paginate(15);

        return view('directory.checklist_opcionescheck.index', compact('checklist_opcionescheck'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('directory.checklist_opcionescheck.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        CheckList_OpcionesCheckList::create($request->all());

        Session::flash('flash_message', 'CheckList_OpcionesCheckList added!');

        return redirect('checklist_opcionescheck');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

        return view('directory.checklist_opcionescheck.show', compact('checklist_opcionescheck'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

        return view('directory.checklist_opcionescheck.edit', compact('checklist_opcionescheck'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return string
     */
    public function update($id, Request $request)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

        /*
               // return "Hola!!!!";
                //return redirect('checklist_opcionescheck');

                $rules = array(
                    'valor1'       => 'required',
                    //'nerd_level' => 'required|numeric'
                );
                $validator = \Validator::make($request->all(), $rules);

                // process the login
                if ($validator->fails()) {
                    return "Dato incompleto, o no hay ";
                } else {
                    $checklist_opcionescheck->update($request->all());

                    Session::flash('flash_message', 'CheckList_OpcionesCheckList updated!');
                    return "Actualizado !!!";
                }*/
        $checklist_opcionescheck->update($request->all());
        Session::flash('flash_message', 'CheckList_OpcionesCheckList updated!');

        return 'Actualizado !!!';
    }

    /**
     * @param $id
     *
     * @return string
     */
    public function destroy($id)
    {
        CheckList_OpcionesCheckList::destroy($id);

        Session::flash('flash_message', 'CheckList_OpcionesCheckList deleted!');

        //return redirect('checklist_opcionescheck');
        return 'Se borro exitosamente !!!';
    }

    public function crearChecklist_option_storage(Request $request)
    {
        CheckList_OpcionesCheckList::create([
            'check_list_id' => $request->check_list_id,
            'atributo'      => $request->atributo,
            'tipo'          => $request->tipo,
        ]);

        return response()->json(['success' => true]);
    }

    public function crearChecklist_option_create($id)
    {
        $dato = ['id' => $id];

        return view('directory.checklist_opcionescheck.create_mini', $dato);
    }

    public function crearChecklist_option_delete($id)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);
        $checklist_opcionescheck->delete();

        return response()->json(['success' => true]);
    }
}

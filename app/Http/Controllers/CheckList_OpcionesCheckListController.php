<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CheckList_OpcionesCheckList;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Response;

class CheckList_OpcionesCheckListController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::paginate(15);

        return view('directory.checklist_opcionescheck.index', compact('checklist_opcionescheck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.checklist_opcionescheck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        CheckList_OpcionesCheckList::create($request->all());

        Session::flash('flash_message', 'CheckList_OpcionesCheckList added!');

        return redirect('checklist_opcionescheck');
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
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

        return view('directory.checklist_opcionescheck.show', compact('checklist_opcionescheck'));
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
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

        return view('directory.checklist_opcionescheck.edit', compact('checklist_opcionescheck'));
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
        
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);

/*
       // return "Hola!!!!";
        //return redirect('checklist_opcionescheck');

        $rules = array(
            'valor1'       => 'required',
            //'nerd_level' => 'required|numeric'
        );
        $validator = \Validator::make(Input::all(), $rules);

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

        return "Actualizado !!!";

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
        CheckList_OpcionesCheckList::destroy($id);

        Session::flash('flash_message', 'CheckList_OpcionesCheckList deleted!');

        //return redirect('checklist_opcionescheck');
        return "Se borro exitosamente !!!";
    }
    public function crearChecklist_option_storage(Request $request){
        CheckList_OpcionesCheckList::create(array(
            'check_list_id' => Input::get('check_list_id'),
            'atributo' => Input::get('atributo'),
            'tipo' => Input::get('tipo')
        ));

        return response()->json(array('success' => true));
    }
    public function crearChecklist_option_create($id)
    {
        $dato=array('id' => $id);
        return view('directory.checklist_opcionescheck.create_mini',$dato);
    }
    public function crearChecklist_option_delete($id)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::findOrFail($id);
        $checklist_opcionescheck->delete();
        return response()->json(array('success' => true));
    }

}

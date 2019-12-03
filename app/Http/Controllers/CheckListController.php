<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\CheckList;
use App\Models\CheckList_OpcionesCheckList;
use App\Models\OpcionesCheckList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CheckListController extends Controller
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
        $checklist = CheckList::paginate(15);
        /*$area = CheckList::find(4)->areaxc;
        dd($area->area);*/

        return view('directory.checklist.index', compact('checklist'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $dts = [];
        $areas = Areas::pluck('area', 'id');
        $user = User::pluck('name', 'id');
        $dts = [$areas, $user];

        return view('directory.checklist.create', compact('dts'));
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        CheckList::create($request->all());

        Session::flash('flash_message', 'CheckList added!');

        return redirect('checklist');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $checklist = CheckList::findOrFail($id);
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $checklist->id)->paginate(50);

        Session::flash('Crear_checklist', 'Crear_checklist');

        return view('directory.checklist.show', compact('checklist', 'checklist_opcionescheck'));
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $areas = Areas::pluck('area', 'id');
        $user = User::pluck('name', 'id');

        $checklist = CheckList::findOrFail($id);
        $checklist->extras2 = $areas;
        $checklist->extras3 = $user;

        return view('directory.checklist.edit', compact('checklist'));
    }

    /**
     * @param $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $checklist = CheckList::findOrFail($id);
        $checklist->update($request->all());

        Session::flash('flash_message', 'CheckList updated!');

        return redirect('checklist');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CheckList::destroy($id);

        Session::flash('flash_message', 'CheckList deleted!');

        return redirect('checklist');
    }

    public function crearChecklist($area_id, $checklist)
    {
        $value = Session::get('Crear_checklist');
        if ($value == 'Crear_checklist') {
            DB::table('check_list__opciones_check_lists')->where('check_list_id', '=', $checklist)->delete();
            $op = OpcionesCheckList::where('area_id', 3)->get();
            foreach ($op as $o) {
                $ck = new CheckList_OpcionesCheckList();
                $ck->check_list_id = $checklist;
                $ck->opciones_check_list_id = $o->id;
                $ck->tipo = $o->tipo;
                $ck->atributo = $o->atributo;
                //dd($ck);
                $ck->save();
            }
            $op2 = OpcionesCheckList::where('area_id', $area_id)->get();

            foreach ($op2 as $o) {
                $ck = new CheckList_OpcionesCheckList();
                $ck->check_list_id = $checklist;
                $ck->opciones_check_list_id = $o->id;
                $ck->tipo = $o->tipo;
                $ck->atributo = $o->atributo;
                //dd($ck);
                $ck->save();
            }
        }
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $checklist)->paginate(15);
        //dd($checklist_opcionescheck);
        //$checklist_opcionescheck = CheckList_OpcionesCheckList::paginate(15);

        return view('directory.checklist_opcionescheck.index_dat', compact('checklist_opcionescheck'));
    }

    public function editarChecklist($area_id, $checklist)
    {
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $checklist)->paginate(15);
        //dd($checklist_opcionescheck);
        //$checklist_opcionescheck = CheckList_OpcionesCheckList::paginate(15);

        return view('directory.checklist_opcionescheck.index_dat', compact('checklist_opcionescheck'));
    }

    public function crearChecklist_mini($area_id, $checklist)
    {
        $value = Session::get('Crear_checklist');
        if ($value == 'Crear_checklist') {
            DB::table('check_list__opciones_check_lists')->where('check_list_id', '=', $checklist)->delete();
            $op = OpcionesCheckList::where('area_id', 3)->get();
            foreach ($op as $o) {
                $ck = new CheckList_OpcionesCheckList();
                $ck->check_list_id = $checklist;
                $ck->opciones_check_list_id = $o->id;
                $ck->tipo = $o->tipo;
                $ck->atributo = $o->atributo;
                //dd($ck);
                $ck->save();
            }
            $op2 = OpcionesCheckList::where('area_id', $area_id)->get();

            foreach ($op2 as $o) {
                $ck = new CheckList_OpcionesCheckList();
                $ck->check_list_id = $checklist;
                $ck->opciones_check_list_id = $o->id;
                $ck->tipo = $o->tipo;
                $ck->atributo = $o->atributo;
                //dd($ck);
                $ck->save();
            }
        }
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $checklist)->paginate(5);
        //dd($checklist_opcionescheck);
        //$checklist_opcionescheck = CheckList_OpcionesCheckList::paginate(15);

        return view('directory.checklist_opcionescheck.index_dat_mini', compact('checklist_opcionescheck'));
    }
}

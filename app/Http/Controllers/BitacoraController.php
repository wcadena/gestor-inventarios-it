<?php

namespace App\Http\Controllers;

use App\CheckList_OpcionesCheckList;
use App\Custodios;
use App\Equipos;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bitacora;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;

class BitacoraController extends Controller
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
        $bitacora = Bitacora::paginate(15);
        //dd($bitacora);
        return view('directory.bitacora.index', compact('bitacora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $equipo_id = Session::get('equipo_id');

        if($equipo_id==null){
            return redirect('equipos');
        }
        $equipo = Equipos::findOrFail($equipo_id);
        $custodio_id=$equipo->custodio_id;
        $user_id = Auth::id();
        $custodio = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');
        $usuario = User::orderBy('name','asc')->pluck('name','id');
       // dd($equipo);
        $dtos=array(
            'custodio'=>$custodio,
            'usuario'=>$usuario,
        );
        return view('directory.bitacora.create', compact('dtos', 'equipo_id','custodio_id','user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $request->input('fecha_ingreso', Carbon::createFromFormat('Y-m-d', $request->get('fecha_ingreso')));

        $BI = Bitacora::create($request->all());
        //dd($BI);
        Session::flash('flash_message', 'Bitacora added!');

        $equipo_id = Session::get('equipo_id');

        if($equipo_id==null){
            return redirect('equipos');
        }

        $equipo = Equipos::findOrFail($equipo_id);
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $equipo->check_list_id)->paginate(200);

        $bitacora = Bitacora::where('id_equipos','=',$equipo_id)->paginate(15);

        Session::put('equipo_id', $equipo_id);

        //return view('directory.equipos.show', compact('equipo','checklist_opcionescheck','bitacora'));
        //return redirect('bitacora');
        return Redirect::action('EquiposController@show', array($equipo_id));
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
        $bitacora = Bitacora::findOrFail($id);

        return view('directory.bitacora.show', compact('bitacora'));
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
        $custodio = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');
        $usuario = User::orderBy('name','asc')->pluck('name','id');
        // dd($equipo);
        $dtos=array(
            'custodio'=>$custodio,
            'usuario'=>$usuario,
        );
        $bitacora = Bitacora::findOrFail($id);

        return view('directory.bitacora.edit', compact('bitacora','dtos'));
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
        
        $bitacora = Bitacora::findOrFail($id);
        $request->input('fecha_ingreso', Carbon::createFromFormat('Y-m-d', $request->get('fecha_ingreso')));

        $bitacora->update($request->all());

        Session::flash('flash_message', 'Bitacora updated!');

        //return redirect('bitacora');
        return Redirect::action('EquiposController@show', array($bitacora->id_equipos));
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
        $bitacora = Bitacora::findOrFail($id);
        Bitacora::destroy($id);

        Session::flash('flash_message', 'Bitacora deleted!');

        //return redirect('bitacora');

        return Redirect::action('EquiposController@show', array($bitacora->id_equipos));
    }

}

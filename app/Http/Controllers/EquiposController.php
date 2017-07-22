<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Bitacora;
use App\CheckList;
use App\CheckList_OpcionesCheckList;
use App\Configuracion;
use App\Custodios;
use App\Equipos_log;
use App\Estaciones;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Equipos;
use App\ModeloEquipo;
use App\OrdenDeCompra;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;
use Session;
use Webpatser\Uuid\Uuid;

class EquiposController extends Controller
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
        $equipos = Equipos::paginate(15);
        ////////////////////////////////////////////////////////////////////////
        /*foreach ($equipos as $o) {
            $nerd = new CheckList();
            $nerd->area_id = $o->area_id;
            $nerd->user_id = Auth::id();
            $nerd->id_check_lists = uniqid('CHK-');
            $nerd->unik_check_lists = Uuid::generate();
            $nerd->save();
            $dathui009 = new CheckListController();
            $utill77563 = $dathui009->crearChecklist($o->area_id, $nerd->id);
            $o->check_list_id=$nerd->id;
            $o->save();
        }
       /**/
        ////////////////////////////////////////////////////////////////////////
        return view('directory.equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $modelos = ModeloEquipo::orderBy('modelo','asc')->pluck('modelo','id');
        $orden = OrdenDeCompra::orderBy('ordenCompra','asc')->pluck('ordenCompra','id');
        $custodio = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');
        $estaciones = Estaciones::lists('estacion','id');
        $areas = Areas::orderBy('area','asc')->pluck('area','id');
        ////////////////////////////////////////////////////////////////////////////
        $util = Equipos::lists('check_list_id');

        //--------------------------------------------------------------------------
        $check_lists = CheckList::whereNotIn('id',
            $util
        )
            ->pluck('id_check_lists','id');
        //dd($check_lists);
        /////////////////////////////////////////////////////////////////////////////
        //$check_lists = CheckList::lists('id_check_lists','id');
        Session::flash('Crear_checklist', 'Crear_checklist');

        $dtos=array(
            'modelos'=>$modelos,
            'orden'=>$orden,
            'custodio'=>$custodio,
            'estaciones'=>$estaciones,
            'areas'=>$areas,
            'check_lists'=>$check_lists,

        );

        
        
        return view('directory.equipos.create', compact('dtos','equipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $nerd = new CheckList();
        $nerd->area_id       = Input::get('area_id');
        $nerd->user_id      = Auth::id();
        $nerd->id_check_lists = uniqid('CHK-');
        $nerd->unik_check_lists=  Uuid::generate();
        $nerd->save();
        $dathui009= new CheckListController();
        $utill77563=$dathui009->crearChecklist(Input::get('area_id'),$nerd->id);
        $custorm=$request->all();
        $custorm['check_list_id']=$nerd->id;

        $equip3=Equipos::create($custorm);
        $custorm['id_equipos']=$equip3->id;
        $custorm['acciondb']='crear';

        Equipos_log::create($custorm);
        Session::flash('flash_message', 'Equipos added!');

        return redirect('equipos');
        //echo
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
        $equipo = \Illuminate\Support\Facades\Session::put('equipo_id',$id);
        $equipo = Equipos::findOrFail($id);
        $checklist_opcionescheck = CheckList_OpcionesCheckList::where('check_list_id', $equipo->check_list_id)->paginate(200);

        $bitacora = Bitacora::where('id_equipos','=',$id)->paginate(15);

        Session::put('equipo_id', $id);

        return view('directory.equipos.show', compact('equipo','checklist_opcionescheck','bitacora'));
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
        //dd($id);
        try{
        $equipo = Equipos::find($id);

        if ($equipo == null){
            Session::flash('flash_message', 'Equipo No encontrado!');
            return redirect('equipos');
        }

        $modelos = ModeloEquipo::lists('modelo','id');
        $orden = OrdenDeCompra::lists('ordenCompra','id');
        $custodio = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');
        $estaciones = Estaciones::lists('estacion','id');
        $areas = Areas::lists('area','id');
        $util = Equipos::whereNotIn('id',[$id])->pluck('check_list_id');

        //--------------------------------------------------------------------------
        $check_lists = CheckList::whereNotIn('id',
            $util
        )
            ->pluck('id_check_lists','id');
        //$check_lists["1"]="Seleccione";

        $dtos=array(
            'modelos'=>$modelos,
            'orden'=>$orden,
            'custodio'=>$custodio,
            'estaciones'=>$estaciones,
            'areas'=>$areas,
            'check_lists'=>$check_lists,

        );
        

        $equipo->extras2=$dtos;
        
        return view('directory.equipos.edit', compact('equipo'));
        }catch (Exception $e){
            Session::flash('flash_message', 'Equipo No encontrado!');
            return redirect('equipos');
        }
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
        if($request->check_list_id==''){
            Input::flashOnly('check_list_id');
        }

        $equipo = Equipos::findOrFail($id);
        $equipo->update($request->all());
        $custorm=$equipo->jsonSerialize();
        $custorm['id_equipos']=$id;
        $custorm['acciondb']='actualizar';
        Equipos_log::create($custorm);
        Session::flash('flash_message', 'Equipos updated!');

        return redirect('equipos');
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
        $equip3=Equipos::findOrFail($id);
        Equipos::destroy($id);
        $custorm=$equip3->jsonSerialize();
        $custorm['id_equipos']=$equip3->id;
        $custorm['acciondb']='borrar';
        Equipos_log::create($custorm);

        Session::flash('flash_message', 'Equipos deleted!');

        return redirect('equipos');
    }
    public function reasignarindex($custodio_id)
    {
        //return ('hola');
        $equipos = Equipos::where('custodio_id',$custodio_id)->paginate(42);
        $obj_custodio = Custodios::findOrFail($custodio_id);
        $nombre_responsable2 = $obj_custodio->nombre_responsable;
        //dd($nombre_responsable2);
        return view('directory.equipos.index_reasignar', compact('equipos','custodio_id','nombre_responsable2'));
    }
    public function reasignarindexecho(Request $request)
    {

        $equipos = $request->input('equipoidfull');
        $nuevo_custodio = $request->input('custodio_id');
        $obj_custodio = Custodios::findOrFail($nuevo_custodio);
        $nombre_responsable2 = $obj_custodio->nombre_responsable;
        $CUSTODIO_BODEGA = Configuracion::Config('CUSTODIO_BODEGA');
        foreach ($equipos as $valor ){
            //echo $valor;
            $equipo = Equipos::findOrFail($valor);
            $equipo->observaciones=$equipo->observaciones."[Se pasa de ".Custodios::findOrFail($equipo->custodio_id)->nombre_responsable." a ".$obj_custodio->nombre_responsable."]";
            $equipo->custodio_id =$CUSTODIO_BODEGA;
            $equipo->estatus='BODEGA';
            $equipo->save();
            $custorm=$equipo->jsonSerialize();
            $custorm['id_equipos']=$valor;
            $custorm['acciondb']='editar';

            Equipos_log::create($custorm);

            $equipo->custodio_id =$nuevo_custodio;
            $equipo->estatus='VIGENTE';
            $equipo->save();

            $custorm=$equipo->jsonSerialize();
            $custorm['id_equipos']=$valor;
            $custorm['acciondb']='editar';
            Equipos_log::create($custorm);
        }

        //return ('hola');
        $equipos = Equipos::where('custodio_id',$nuevo_custodio)->paginate(15);
        $custodio_id=$nuevo_custodio;
        return view('directory.equipos.index_reasignar', compact('equipos','custodio_id','nombre_responsable2'));
    }
    public function home()
    {

        $posts = Equipos::paginate(15);

        return view('directory.equipos.index_serch', compact('posts'));
    }
    public function buscaDato($dato,$valor)
    {
        return $equipos = Equipos::where($dato, $valor)->get();
    }

}

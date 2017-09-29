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
use App\Jobs\SendActualizacionCustodioeEmail;
use App\ModeloEquipo;
use App\OrdenDeCompra;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use League\Flysystem\Exception;
use Session;
use Webpatser\Uuid\Uuid;
use Intervention\Image\ImageManagerStatic as Image;

class EquiposController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $equipos = Equipos::paginate(15);

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
        $estaciones = Estaciones::pluck('estacion','id');
        $areas = Areas::orderBy('area','asc')->pluck('area','id');
        ////////////////////////////////////////////////////////////////////////////
        $util = Equipos::pluck('check_list_id');
        $config_custodio_prin= Configuracion::where('atributo','=','CUSTODIO_BODEGA')->first();

        //--------------------------------------------------------------------------
        $check_lists = CheckList::whereNotIn('id',
            $util
        )
            ->pluck('id_check_lists','id');
        //dd($check_lists);
        /////////////////////////////////////////////////////////////////////////////
        //$check_lists = CheckList::pluck('id_check_lists','id');
        Session::flash('Crear_checklist', 'Crear_checklist');

        $areas_defualt='';

        if (session('areas_default')) {
            $areas_defualt=session('areas_default');
           // dd($areas_defualt);
        }


        $dtos=array(
            'modelos'=>$modelos,
            'orden'=>$orden,
            'custodio'=>$custodio,
            'custodio_defecto'=>$config_custodio_prin->valor,
            'estaciones'=>$estaciones,
            'areas'=>$areas,
            'areas_defualt'=>$areas_defualt,
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
        $reglas = [
            'area_id' => 'required',
            'observaciones' => 'required',
            'descripcion' => 'required',
            'no_serie' => 'required',
        ];
        $this->validate($request, $reglas);
        /**
         * si encuentra uno con serie identica
         */

            $equipo_exist = Equipos::where('no_serie','=',Input::get('no_serie'))->get();

            if($equipo_exist->count()>1){
                Session::flash('flash_message', 'Equipos con un numero de serie ya existente: '.Input::get('no_serie').", Se ha abierto el equipo existente, verificar datos.");
                return redirect('equipos/'.$equipo_exist->first()->id."/edit");
            }

        session(['areas_default' => Input::get('area_id')]);
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

        $file = Input::file('imagen');//la imagen se lee aca

        if(Input::hasFile('imagen')) {

            $img = Image::make($file)->resize(600, 400);
            Response::make($img->encode('jpeg'));
            $custorm['imagen'] = $img;
        }

        $equip3=Equipos::create($custorm);
        $custodio_n = Custodios::find(Input::get('custodio_id'));
        $custodio_n->notificado =   Custodios::CUSTODIO_NOTIFICADO;
        $custodio_n->save();
        $custorm['id_equipos']=$equip3->id;
        $custorm['acciondb']='crear';
        $custorm['id_users']=Auth::user()->id;

        Equipos_log::create($custorm);
        Session::flash('flash_message', 'Equipos added!');
        \Illuminate\Support\Facades\Session::put('x_notificar_time',\Carbon\Carbon::now()->addMinutes(0));

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



        if($equipo->modelo_equipoxc->fabricante=='HP'&&
            $equipo->hp_warrantyLevel==null){
            $http = new Client;
            $res = $http->request('GET', 'https://support.hp.com/hp-pps-services/os/getWarrantyInfo?serialnum='.$equipo->no_serie.'&counpurchase=es&cc=es&lc=es&redirectPage=WarrantyResult'
            );
            $respuesta =json_decode((string) $res->getBody(), true);
            //dd($respuesta["newProduct"]["imageUrl"]);
            $equipo->hp_warrantyLevel	=	$respuesta["warrantyLevel"];
            $equipo->hp_endDate	=	$respuesta["endDate"];
            $equipo->hp_displaySerialNumber	=	$respuesta["displaySerialNumber"];
            $equipo->hp_modelNumber	=	$respuesta["modelNumber"];
            $equipo->hp_countryOfPurchase	=	$respuesta["countryOfPurchase"];
            $equipo->hp_newProduct_seriesName	=	$respuesta["newProduct"]["seriesName"];
            $equipo->hp_newProduct_imageUrl	=	$respuesta["newProduct"]["imageUrl"];
            $equipo->hp_warrantyResultRedirectUrl   =   $respuesta["warrantyResultRedirectUrl"];
        }
        if(!$equipo->hp_endDate==null){
            $fecha_caduca = Carbon::createFromFormat('Y-m-d', $equipo->hp_endDate);
            $diferenciaanios = Carbon::now()->diffInDays($fecha_caduca, false);
            if($diferenciaanios<0){
                $equipo->garantia   =   "NO";
                $equipo->save();
                Session::flash('flash_message_show1error', trans('form.nogarantia').$fecha_caduca);
            }else{
                $equipo->garantia   =   "SI";
                $equipo->save();
                Session::flash('flash_message_show1',trans('form.garantia_s') .$fecha_caduca);
            }
        }




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

        $modelos = ModeloEquipo::pluck('modelo','id');
        $orden = OrdenDeCompra::pluck('ordenCompra','id');
        $custodio = Custodios::orderBy('nombre_responsable','asc')->pluck('nombre_responsable','id');
        $estaciones = Estaciones::pluck('estacion','id');
        $areas = Areas::pluck('area','id');
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

    public function showPicture($id)
    {
        $picture = Equipos::findOrFail($id);
        $pic = Image::make($picture->imagen);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
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
        $reglas = [
            'modelo_equipo_id' => 'required',
            'orden_de_compra_id' => 'required',
            'custodio_id' => 'required',
            'estacione_id' => 'required',
            'area_id' => 'required',
            'sociedad' => 'required',
            'descripcion' => 'required',
            'observaciones' => 'required',

        ];
        $this->validate($request, $reglas);

        if($request->check_list_id==''){
            Input::flashOnly('check_list_id');
        }

        $equipo = Equipos::findOrFail($id);

        $file = Input::file('imagen');//la imagen se lee aca

        $custorm0=$request->all();
        if(Input::hasFile('imagen')) {
            $img = Image::make($file)->resize(600, 400);
            Response::make($img->encode('jpeg'));
            $custorm0['imagen'] = $img;
        }

        $custodio_n = Custodios::find($equipo->custodio_id);
        $custodio_n->notificado =   Custodios::CUSTODIO_NOTIFICADO;
        $custodio_n->save();

        $equipo->update($custorm0);
        //dd($equipo);

        $custodio_n2 = Custodios::find(Input::get('custodio_id'));
        $custodio_n2->notificado =   Custodios::CUSTODIO_NOTIFICADO;
        $custodio_n2->save();


        $custorm=$equipo->jsonSerialize();
        $custorm['id_equipos']=$id;
        $custorm['acciondb']='actualizar';
        $custorm['id_users']=Auth::user()->id;
        //dd($f);

        Equipos_log::create($custorm);
        Session::flash('flash_message', 'Equipos updated!');
        \Illuminate\Support\Facades\Session::put('x_notificar_time',\Carbon\Carbon::now()->addMinutes(0));

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
        $custodio_n = Custodios::find($equip3->custodio_id);
        $custodio_n->notificado =   Custodios::CUSTODIO_NOTIFICADO;
        $custodio_n->save();
        $custorm['id_users']=Auth::user()->id;
        Equipos_log::create($custorm);

        Session::flash('flash_message', 'Equipos deleted!');
        \Illuminate\Support\Facades\Session::put('x_notificar_time',\Carbon\Carbon::now()->addMinutes(0));


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
        $request->validate([
            'equipoidfull' => 'required',
            'custodio_id' => 'required',
        ]);
        $equipos = $request->input('equipoidfull');
        $nuevo_custodio = $request->input('custodio_id');
        $obj_custodio = Custodios::findOrFail($nuevo_custodio);
        $nombre_responsable2 = $obj_custodio->nombre_responsable;
        $CUSTODIO_BODEGA = Configuracion::Config('CUSTODIO_BODEGA');
        try{
            DB::beginTransaction();

            foreach ($equipos as $valor ){
                //echo $valor;
                $equipo = Equipos::findOrFail($valor);

                $custodio_n = Custodios::find($equipo->custodio_id);
                $custodio_n->notificado =   Custodios::CUSTODIO_NOTIFICADO;
                $custodio_n->save();
                $custodio_n2 = Custodios::find($nuevo_custodio);
                $custodio_n2->notificado =   Custodios::CUSTODIO_NOTIFICADO;
                $custodio_n2->save();

                $equipo->observaciones=$equipo->observaciones."[Se pasa de ".Custodios::findOrFail($equipo->custodio_id)->nombre_responsable." a ".$obj_custodio->nombre_responsable."]";
                $equipo->custodio_id =$CUSTODIO_BODEGA;
                $equipo->estatus='BODEGA';
                $equipo->save();
                $custorm=$equipo->jsonSerialize();
                $custorm['id_equipos']=$valor;
                $custorm['acciondb']='editar';
                $custorm['id_users']=Auth::user()->id;

                Equipos_log::create($custorm);

                $equipo->custodio_id =$nuevo_custodio;
                $equipo->estatus='VIGENTE';
                $equipo->save();

                $custorm=$equipo->jsonSerialize();
                $custorm['id_equipos']=$valor;
                $custorm['acciondb']='editar';
                $custorm['id_users']=Auth::user()->id;

                Equipos_log::create($custorm);
            }
        }catch (Exception $e){
            DB::rollback();
        }
        DB::commit();
        //Mail::to($user)->send(new UserCreated($user));

        //return ('hola');

        \Illuminate\Support\Facades\Session::put('x_notificar_time',\Carbon\Carbon::now()->addMinutes(0));
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

    public function garantiasHP()
    {
        $equipos = Equipos::where('hp_displaySerialNumber','=',null)->paginate(50);

        return view('directory.equipos.index_garantiaHP', compact('equipos'));
    }
}

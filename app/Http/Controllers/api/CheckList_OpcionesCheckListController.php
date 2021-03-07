<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\ApiController;
use App\Models\CheckList_OpcionesCheckList;
use App\Models\Equipos;
use App\Models\OpcionesCheckList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CheckList_OpcionesCheckListController extends ApiController
{
    public function __construct()
    {
        //Auth::login(User::findOrFail(env('APP_PUESTOS_USER'))->firstOrFail());
        //dd(Auth::user());
        $this->middleware('client.credentials')->only(['store', 'resend', 'notificacion', 'borrartipo','uploadFilestore']);
        $this->middleware('auth:api')->except(['verify', 'resend']);
        /*$this->middleware('transform.input:' . UserTransformer::class)->only(['store', 'update']);
        $this->middleware('scope:manage-account')->only(['show', 'update']);
        $this->middleware('can:view,user')->only('show');
        $this->middleware('can:update,user')->only('update');
        $this->middleware('can:delete,user')->only('destroy');*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = CheckList_OpcionesCheckList::all();

        return $this->showAll($equipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'check_list_id'          => 'required|exists:check_lists,id',
            'opciones_check_list_id' => 'required|exists:opciones_check_lists,id',
            'valor1'                 => 'required|max:255',
            'valor2'                 => 'max:255',
            'valor3'                 => 'max:255',
            'valor4'                 => 'max:255',
            'valor5'                 => 'max:255',
            'valor6'                 => 'max:255',
            'valor7'                 => 'max:255',
            'valor8'                 => 'max:255',
            'valor9'                 => 'max:255',
            'valor10'                => 'max:255',
        ]);

        $campos = $request->all();
        $opcion = OpcionesCheckList::findOrFail($request->opciones_check_list_id);
        $campos['tipo'] = $opcion->tipo;
        $campos['atributo'] = $opcion->atributo;

        $custodios = CheckList_OpcionesCheckList::create($campos);

        return $this->showOne($custodios, 201);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadFilestore(Request $request)
    {
        $request->validate([
            'uploadfile'    => 'required',
            'hash'    => 'required',
            'tiposha'    => 'required',
            'no_serie'    => 'required',
        ]);
        $file       = base64_decode($request->uploadfile); //la imagen se lee aca
        $hash_p     = hash("sha256",$file);
        Storage::disk('local')->put($hash_p.'.txt', $file);
        $sistema    = json_decode($file);
        $equipo = Equipos::where('no_serie', 'like', '%'.$request->no_serie.'%')->firstOrFail();
        $check_list_id = $equipo->check_listxc->id;
        $utilssacs = CheckList_OpcionesCheckList::where('check_list_id', $check_list_id)->get();
        foreach ($utilssacs as $utilssac) {
            $utilssac->delete();
        }
//delete from check_list__opciones_check_lists where check_list_id = 1 and opciones_check_list_id is null;
        foreach ($sistema->programas as $key=>$value) {
            $this->add_CheckList_OpcionesCheckList($check_list_id,'programas',$key,$value );
        }
        foreach ($sistema->sistema as $key=>$value){
            if(in_array($key ,['version','node','v8','inetLatency'])){
                $this->add_CheckList_OpcionesCheckList($check_list_id,$key,$key,$value );
            }elseif(in_array($key, ['system','bios','baseboard','chassis','os','uuid','versions','cpu','graphics','net','memLayout','diskLayout','time','cpuCurrentSpeed','services','currentLoad','networkConnections','fsSize','battery','temp','mem','wifiNetworks','users','processes','networkStats'])){
                foreach ($value as $key_sub=>$value_sub) {
                    if(!is_array($value_sub) && !is_object($value_sub)){
                        $this->add_CheckList_OpcionesCheckList($check_list_id,$key,$key_sub,$value_sub );
                    }else{
                        foreach ($value_sub as $key_sub2=>$value_sub2) {
                            $this->add_CheckList_OpcionesCheckList($check_list_id,$key,$key_sub.'.'.$key_sub2,$value_sub2 );
                        }
                    }
                }
            }else{
                // return json_encode($sistema->sistema);
                // dd($sistema->sistema,$key,$value);
            }

        }
        return response()->json(['success' => true]);
    }
    private function add_CheckList_OpcionesCheckList($check_list_id,$key,$key_sub,$value_sub2,$keydata = null){
        $campos                             = [];
        $campos['check_list_id']            = $check_list_id;
        $opcion                             = OpcionesCheckList::findOrFail($this->buscaOpcion($key));
        $campos['valor1']                   = json_encode($value_sub2);
        $campos['valor2']                   = $key_sub;
        $campos['valor3']                   = $key;
        $campos['tipo']                     = $opcion->tipo;
        $campos['atributo']                 = $opcion->atributo;
        $campos['opciones_check_list_id']   = $opcion->id;
        CheckList_OpcionesCheckList::create($campos);
    }
    private function buscaOpcion($sysoption){
        switch ($sysoption) {
            case 'system':
            case 'processes':
                return 74;
            case 'bios':
                return 75;
            case 'baseboard':
                return 76;
            case 'chassis':
                return 77;
            case 'os':
                return 69;
            case 'uuid':
                return 78;
            case 'versions':
                return 79;
            case 'cpu':
                return 64;
            case 'battery':
                return 65;
            case 'fsSize':
            case 'diskLayout':
                return 66;
            case 'graphics':
                return 67;
            case 'net':
            case 'networkConnections':
            case 'wifiNetworks':
            case 'networkStats':
            case 'inetLatency':
                return 68;
            case 'memLayout':
            case 'mem':
                return 71;
            case 'node':
            case 'programas':
                return 72;
            case 'version':
                return 73;
            case 'v8':
            case 'time':
            case 'cpuCurrentSpeed':
            case 'services':
            case 'currentLoad':
            case 'temp':
                return 74;
            case 'users':
                return 82;

        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CheckList_OpcionesCheckList $checkList_OpcionesCheckList)
    {
        //dd($equipos);
        return $this->showOne($checkList_OpcionesCheckList);
    }

    private function borrartipo_master($opciones_check_list_id,$check_list_id){
        $utilssacs = CheckList_OpcionesCheckList::where('opciones_check_list_id', $opciones_check_list_id)
            ->where('check_list_id', $check_list_id)->get();
        foreach ($utilssacs as $utilssac) {
            $utilssac->delete();
        }
    }
    public function borrartipo(Request $request)
    {
        $request->validate([
            'opciones_check_list_id'     => 'required',
            'check_list_id'              => 'required',
        ]);
        $this->borrartipo_master($request->opciones_check_list_id,$request->check_list_id);
        return response()->json(['success' => true]);
    }
}

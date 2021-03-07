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

        //dd($sistema->programas[0]);

        foreach ($sistema->sistema as $key=>$value){
            $campos = [];
            $campos['check_list_id']    = $equipo->check_listxc->id;
            if(in_array($key ,['version','node','v8','inetLatency'])){
                $opcion = OpcionesCheckList::findOrFail($this->buscaOpcion($key));
                $campos['valor1']                   = $value;
                $campos['valor2']                   = $key;
                $campos['valor3']                   = $key;
                $campos['tipo']                     = $opcion->tipo;
                $campos['atributo']                 = $opcion->atributo;
                $campos['opciones_check_list_id']   = $opcion->id;
                CheckList_OpcionesCheckList::create($campos);
            }elseif(in_array($key, ['system','bios','baseboard','chassis','os','uuid','versions','cpu','graphics','net','memLayout','diskLayout','time','cpuCurrentSpeed','services','currentLoad','networkConnections','fsSize','battery','temp','mem','wifiNetworks','users','processes','networkStats'])){
                foreach ($value as $key_sub=>$value_sub) {
                    if(!is_array($value_sub) && !is_object($value_sub)){
                        $opcion = OpcionesCheckList::findOrFail($this->buscaOpcion($key));
                        $campos['valor1']                   = $value_sub;
                        $campos['valor2']                   = $key_sub;
                        $campos['valor3']                   = $key;
                        $campos['tipo']                     = $opcion->tipo;
                        $campos['atributo']                 = $opcion->atributo;
                        $campos['opciones_check_list_id']   = $opcion->id;
                        CheckList_OpcionesCheckList::create($campos);
                    }else{
                        foreach ($value_sub as $key_sub2=>$value_sub2) {
                            //$this->add_CheckList_OpcionesCheckList($key,$key_sub.'.'.$key_sub2,$value_sub2 );
                            $opcion = OpcionesCheckList::findOrFail($this->buscaOpcion($key));
                            $campos['valor1']                   = json_encode($value_sub2);
                            $campos['valor2']                   = $key_sub.'.'.$key_sub2;
                            $campos['valor3']                   = $key;
                            $campos['tipo']                     = $opcion->tipo;
                            $campos['atributo']                 = $opcion->atributo;
                            $campos['opciones_check_list_id']   = $opcion->id;
                            CheckList_OpcionesCheckList::create($campos);
                        }
                    }
                }
            }else{
                // return json_encode($sistema->sistema);
                dd($sistema->sistema,$key,$value);
            }

        }
        return $this->showMessage('Hola', 201);
    }
    private function add_CheckList_OpcionesCheckList($key,$key_sub,$value_sub2){
        $opcion = OpcionesCheckList::findOrFail($this->buscaOpcion($key));
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
            case 'graphics':
                return 67;
            case 'net':
                return 68;
            case 'memLayout':
            case 'mem':
                return 71;
            case 'diskLayout':
                return 66;
            case 'time':
                return 74;
            case 'node':
                return 72;
            case 'version':
                return 73;
            case 'v8':
                return 74;
            case 'cpuCurrentSpeed':
                return 74;
            case 'services':
                return 74;
            case 'currentLoad':
            case 'temp':
                return 74;
            case 'networkConnections':
            case 'wifiNetworks':
            case 'networkStats':
                return 68;
            case 'inetLatency':
                return 68;
            case 'fsSize':
                return 66;
            case 'battery':
                return 65;
            case 'users':
                return 82;
            case 2:
                return 74;
            case 2:
                return 74;
            case 2:
                return 74;
            case 2:
                return 74;
            case 2:
                return 74;
            case 2:
                return 74;
            case 2:
                return 74;


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

    public function borrartipo(Request $request)
    {
        $request->validate([
            'opciones_check_list_id'     => 'required',
            'check_list_id'              => 'required',
        ]);
        $utilssacs = CheckList_OpcionesCheckList::where('opciones_check_list_id', $request->opciones_check_list_id)
            ->where('check_list_id', $request->check_list_id)->get();
        foreach ($utilssacs as $utilssac) {
            $utilssac->delete();
        }

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers\api;

use App\CheckList_OpcionesCheckList;
use App\Http\Controllers\ApiController;
use App\OpcionesCheckList;
use Illuminate\Http\Request;

class CheckList_OpcionesCheckListController extends ApiController
{
    public function __construct()
    {
        //Auth::login(User::findOrFail(env('APP_PUESTOS_USER'))->firstOrFail());
        //dd(Auth::user());
        $this->middleware('client.credentials')->only(['store', 'resend', 'notificacion']);
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
}

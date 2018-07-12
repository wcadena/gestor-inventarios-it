<?php

namespace App\Http\Controllers\api;

use App\CheckList_OpcionesCheckList;
use App\Equipos;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoCheckListController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend', 'notificacion']);
        $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
    }

    public function boot()
    {
        parent::boot();

        Route::model('equipos', Equipos::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Equipos $equipos)
    {
        return $this->showAll(CheckList_OpcionesCheckList::where('check_list_id', '=', $equipos->check_list_id)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Equipos $equipos, Request $request)
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

        /********************************/
        return DB::transaction(function () use ($request, $equipos) {
            $campos = $request->all();
            $opcion = OpcionesCheckList::findOrFail($request->opciones_check_list_id);
            $campos['tipo'] = $opcion->tipo;
            $campos['atributo'] = $opcion->atributo;

            $custodios = CheckList_OpcionesCheckList::create($campos);

            return $this->showOne($custodios, 201);
        });
        /********************************/
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return 'destroy';
    }
}

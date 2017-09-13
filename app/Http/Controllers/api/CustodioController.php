<?php

namespace App\Http\Controllers\api;

use App\Custodios;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustodioController extends ApiController
{
    public function __construct()
    {
        //$this->middleware('client.credentials')->only(['store', 'resend']);
        /* $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
       $this->middleware('transform.input:' . UserTransformer::class)->only(['store', 'update']);
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
        $custodios = Custodios::all();
        return $this->showAll($custodios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Custodios $custodio)
    {

        return $this->showOne($custodio);
    }

    /**
     * api de busqueda por cedula
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function cedula(Request $request)
    {
        $reglas = [
            'documentoIdentificacion' => 'required|max:15',
        ];
        $this->validate($request, $reglas);

        $custodio = Custodios::where('documentoIdentificacion',"like", '%'.$request->documentoIdentificacion."%")->firstOrFail();

        return $this->showOne($custodio);
    }

    /**
     * api de envio de notificacion de custodios
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function notificacion(Request $request)
    {
        $reglas = [
            'id' => 'required',
        ];
        $this->validate($request, $reglas);

        $custodio = Custodios::Notificar()->where('id',$request->id)->get();
        if($custodio->count()==1){
            return $this->showMessage("Se ha enviado la notificacion");
            //$this->showMessage("Se ha enviado la notificacion", 504);
        }
        return $this->showMessage("Este usuario ya no tiene notificaciones pendientes",404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

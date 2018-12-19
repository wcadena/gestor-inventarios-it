<?php

namespace App\Http\Controllers\api;

use App\CheckList;
use App\Http\Controllers\ApiController;

class ChecklistController extends ApiController
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
        $equipos = CheckList::all();

        return $this->showAll($equipos);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CheckList $checkList)
    {
        //dd($equipos);
        return $this->showOne($checkList);
    }
}

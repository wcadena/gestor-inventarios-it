<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\ApiController;
use App\InformeMantenimientoPreventivo;
use Illuminate\Http\Request;

class InformeMantenimientoPreventivoController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend']);
        $this->middleware('auth:api')->only(['show'])->except(['store', 'verify', 'resend']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = $informes = InformeMantenimientoPreventivo::all();

        return $this->showAll($usuarios);
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(InformeMantenimientoPreventivo $info)
    {
        return $this->showOne($info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
    }
}

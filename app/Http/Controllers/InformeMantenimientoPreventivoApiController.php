<?php

namespace App\Http\Controllers;

use App\InformeMantenimientoPreventivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InformeMantenimientoPreventivoApiController extends Controller
{

    private $info;
    public function __construct(InformeMantenimientoPreventivo $info){
        $this->info = $info;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(Input::get('id')<>null){
            $this->info = InformeMantenimientoPreventivo::findOrFail(Input::get('id'));

            return response()->json(['result' => $this->info]);
        }else{
            $informes = InformeMantenimientoPreventivo::paginate();

            return response()->json(['result' => $informes]);

        }

        //return view('directory.informes.index', compact('informes'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $this->info=InformeMantenimientoPreventivo::create($request->all());

        return response()->json(['status'=>true,'message'=>'InformeMantenimientoPreventivo created successfully','data'=>$this->info]);
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
        $this->info = InformeMantenimientoPreventivo::findOrFail($id);

        return response()->json(['result' => $this->info]);

        //return view('directory.informes.show', compact('informe'));
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

        $this->info = InformeMantenimientoPreventivo::findOrFail($id);
        $this->info->update($request->all());



        return response()->json(['status'=>true,'message'=>'InformeMantenimientoPreventivo updated successfully','data'=>$this->info]);


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
        $this->info=null;
        InformeMantenimientoPreventivo::destroy($id);

        return response()->json(['status'=>true,'message'=>'InformeMantenimientoPreventivo deleted successfully']);
    }
}

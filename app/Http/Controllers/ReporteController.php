<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $equipos = Equipos::get();

        /*$equipos = DB::table('equipos')
            ->leftJoin('estaciones', 'equipos.estacione_id', '=', 'estaciones.id')
            ->get();*/
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
        return view('directory.reporte.repo1', compact('equipos'));

        $sql="SELECT modelo_equipos.modelo,
       orden_de_compras.ordenCompra,
       custodios.nombre_responsable,
       custodios.area_piso AS `Custudio Area`,
       custodios.ciudad AS custodio_ciudad,
       estaciones.estacion AS equipo_estacion,
       areas.area,
       equipos.num_cajas,
       equipos.sociedad,
       equipos.no_serie,
       equipos.codigo_barras,
       equipos.codigo_avianca,
       equipos.codigo_otro,
       equipos.descripcion,
       equipos.ip,
       equipos.estado,
       equipos.estatus,
       equipos.garantia,
       equipos.observaciones
  FROM ((((db69751_inventario.equipos equipos
           INNER JOIN db69751_inventario.estaciones estaciones
              ON (equipos.estacione_id = estaciones.id))
          INNER JOIN db69751_inventario.modelo_equipos modelo_equipos
             ON (equipos.modelo_equipo_id = modelo_equipos.id))
         INNER JOIN db69751_inventario.orden_de_compras orden_de_compras
            ON (equipos.orden_de_compra_id = orden_de_compras.id))
        INNER JOIN db69751_inventario.custodios custodios
           ON (equipos.custodio_id = custodios.id))
       INNER JOIN db69751_inventario.areas areas
          ON (equipos.area_id = areas.id)";
        dd($sql);
    }
    public function excel(){

        //return view('directory.reporte.repo1excel', compact('equipos'));

        Excel::create('Reporte Total', function($excel) {

            $excel->sheet('Maquinas', function($sheet) {
                $equipos = Equipos::get();
                $sheet->loadView('directory.reporte.repo1excel', compact('equipos'));
            });
        })->download('xls');;

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
        echo('dato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("Excel"+$id);
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

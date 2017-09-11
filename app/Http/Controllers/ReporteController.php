<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;

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
        return view('directory.reporte.repo1', compact('equipos'));

    }

    public function estaciones($estacione_id)
    {

        $estaciones = Equipos::select('estaciones.estacion', DB::raw('Count(estacione_id) as Contador') ,
            DB::raw('MAX(estacione_id) as estacione_id'))
            ->join('estaciones', 'estaciones.id', '=', 'equipos.estacione_id')
            ->groupBy('estacione_id')
            ->get();
        $equipos = Equipos::where('estacione_id',$estacione_id)
            ->get();
        //dd($estaciones->first()->estacione_id);
        return view('directory.reporte.reporte_estaciones', compact('equipos','estaciones','estacione_id'));

    }
    public function excelEstaciones($estacione_id){

        //return view('directory.reporte.repo1excel', compact('equipos'));
        Session::flash('flash_estacione_id', $estacione_id);

        Excel::create('Reporte_por_estaciones', function($excel) {

            $excel->sheet('Maquinas', function($sheet) {
                $equipos = Equipos::where('estacione_id', Session::get('flash_estacione_id'))->get();
                $sheet->loadView('directory.reporte.repo1excel', compact('equipos'));
            });
        })->download('xls');;

    }

    public function excel(){

        //return view('directory.reporte.repo1excel', compact('equipos'));

        Excel::create('Reporte_Total', function($excel) {

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

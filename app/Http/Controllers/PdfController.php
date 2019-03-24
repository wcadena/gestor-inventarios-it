<?php

namespace App\Http\Controllers;

use App\Custodios;
use App\RepoNovedades;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    public function invoice($custodio_id)
    {
        $custodio = Custodios::where('documentoIdentificacion', '=', $custodio_id)->firstOrFail();

        $date = date('Y-m-d');
        $view = \View::make('pdf.invoice', compact('custodio', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $impresion = $view;

        try {
            $pdf->loadHTML($view);
            //para la impresion de muchos
            //$impresion = $pdf->stream('invoice');
        } catch (Exception $e) {
            report($e);
        }

        return $impresion;
    }

    public function invoiceCustom($token_unico)
    {
        $repono = RepoNovedades::where('token_unico', '=', $token_unico)->first();
        $date = $repono->fecha_novedades;
        $custodio = $repono->custodioxc;
        $view = \View::make('pdf.custom.invoice', compact('custodio', 'repono', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $impresion = $view;
        //$impresion = $pdf->stream('invoice');

        return  $impresion;
    }
}

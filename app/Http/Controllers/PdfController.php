<?php

namespace App\Http\Controllers;

use App\Custodios;
use App\RepoNovedades;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system');

    }
    public function invoice($custodio_id)
    {
        $custodio = Custodios::findOrFail($custodio_id);
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('custodio','data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
        //return $view ;
    }

    public function getData()
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }

    public function invoiceCustom($custodio_id)
    {
        $repono = RepoNovedades::findOrFail($custodio_id);
        //return \View::make('pdf.custom.invoice', compact('repono'));
        $view =  \View::make('pdf.custom.invoice', compact('repono'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
        //return $view ;
    }

    public function beta($custodio_id)
    {
        $view =  \View::make('pdf.beta', compact('repono'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->stream('invoice');
        return $view ;
    }

    public function beta2($custodio_id)
    {
        $view =  \View::make('pdf.hojadeentrega', compact('repono'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream();
        //return $view ;
    }
}

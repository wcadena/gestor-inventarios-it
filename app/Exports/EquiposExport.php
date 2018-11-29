<?php

namespace App\Exports;

use App\Equipos;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromView;

class EquiposExport implements FromView
{
    /**
     * @return View
     */
    public function view(): View
    {
        $equipos = Equipos::where('estacione_id', Session::get('flash_estacione_id'))->get();

        return view('directory.reporte.repo1excel', [
            'equipos' => $equipos,
        ]);
    }
}

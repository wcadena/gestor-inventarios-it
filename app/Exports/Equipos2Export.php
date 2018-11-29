<?php

namespace App\Exports;

use App\Equipos;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Equipos2Export implements FromView
{
    /**
     * @return View
     */
    public function view(): View
    {
        $equipos = Equipos::get();

        return view('directory.reporte.repo1excel', [
            'equipos' => $equipos,
        ]);
    }
}

<?php

namespace App\Console\Commands;

use App\Puesto;
use App\PuestoCustodios;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DisponePuestos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'disponibilidad:ordena ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Quita todos lso asientos que cumplan el tiempo de estadia';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $puestos = PuestoCustodios::all();
        $encerados = 0;
        foreach ($puestos as $puesto) {
            $ahorita = Carbon::now();
            //dd($ahorita);

            $tiempoPuesto = new Carbon($puesto->fecha_inicio);

            $dato = $ahorita->diffInHours($tiempoPuesto);
            if ($dato >= $puesto->horas_trabajadas) {
                $p = Puesto::where('id', '=', $puesto->puesto_id)->firstOrFail();
                $p->estado = 'LIBRE';
                $p->save();
                $puesto->delete();
                $encerados++;
            }
            //1->addHours($puesto->horas_trabajadas);
            //dd($tiempoPuesto);1
        }
        $this->info('Todos los puestos han sido puestos en libertad si ya paso el tiempo, se enceraron ('.$encerados.')');
    }
}

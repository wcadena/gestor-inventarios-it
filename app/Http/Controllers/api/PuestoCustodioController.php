<?php

namespace App\Http\Controllers\api;

use App\Custodios;
use App\Http\Controllers\ApiController;
use App\Puesto;
use App\PuestoCustodios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class PuestoCustodioController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend', 'notificacion']);
        $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($puesto)
    {
        return $this->showAll(PuestoCustodios::where('puesto_id', '=', $puesto)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Puesto $puesto, Custodios $custodio, Request $request)
    {
        $rules = [
           // 'fecha_inicio' => 'required|date|',
            'horas_trabajadas' => 'required|integer|min:1',
            'estado'           => 'required|in:OCUPADO,RESERVADO,LIBRE',
        ];
        $this->validate($request, $rules);
        if (!$puesto->estado == 'LIBRE') {
            return $this->errorResponse('El puesto no está disponible', 409);
        }
        /********************************/
        return DB::transaction(function () use ($request, $puesto, $custodio) {
            $puesto->estado = $request->estado;
            $puesto->save();
            $transaction = PuestoCustodios::create([
                'fecha_inicio'     => Carbon::now(),
                'horas_trabajadas' => $request->horas_trabajadas,
                'puesto_id'        => $puesto->id,
                'custodio_id'      => $custodio->id,
            ]);

            return $this->showOne($transaction, 201);
        });
        /********************************/
    }

    /**
     * para asignar un puesto a un custodio.
     *
     * @param Request $request documentoIdentificacion,codigo,horas
     */
    public function asigna(Request $request)
    {
        $reglas = [
            'documentoIdentificacion' => 'required|max:15',
            'codigo'                  => 'required|max:250',
            'horas'                   => 'required|numeric|max:250',
        ];
        $this->validate($request, $reglas);

        Artisan::call('disponibilidad:ordena', []);

        return DB::transaction(function () use ($request) {
            $custodio = Custodios::where('documentoIdentificacion', 'like', $request->documentoIdentificacion)->first();

            $puesto = Puesto::where('codigo', 'like', $request->codigo)->first();

            if (count($puesto->PuestoCustodios) > 0) {
                $puesto_dato = $puesto->PuestoCustodios[0];
                $id_custodioenpuesto = $puesto_dato['custodio_id'];
                if ($id_custodioenpuesto != $custodio->id) {
                    $custodioenpuesto = Custodios::findOrFail($id_custodioenpuesto);

                    return $this->errorResponse('Puesto ya cogido por '.$custodioenpuesto->nombre_responsable.', Cedula: '.$custodioenpuesto->documentoIdentificacion.' a las :'.$puesto_dato->fecha_inicio
                        .' por ('.$puesto_dato->horas_trabajadas.') horas', 418);
                } else {
                    return $this->showOne($puesto->PuestoCustodios[0], 201);
                }
            }
            $puestoconsole = PuestoCustodios::where('custodio_id', '=', $custodio->id)
               // ->where('puesto_id','=',$puesto->id)//pone libre todos los otros puestos
                ->get();
            foreach ($puestoconsole as $pc) {
                $p = Puesto::where('id', '=', $pc->puesto_id)->firstOrFail();
                $p->estado = 'LIBRE';
                $p->save();
                $pc->delete();
            }
            $transaction = $puestoconsole;

            $transaction = PuestoCustodios::create([
                'fecha_inicio'     => Carbon::now(),
                'fecha_fin'        => Carbon::now()->addHour($request->horas),
                'horas_trabajadas' => $request->horas,
                'puesto_id'        => $puesto->id,
                'custodio_id'      => $custodio->id,
            ]);
            $puesto->estado = 'OCUPADO';
            $puesto->save();

            return $this->showOne($transaction, 201);
        });
    }

    /**
     * liberar puesto.
     */
    public function liberar(Request $request)
    {
        $reglas = [
            'documentoIdentificacion' => 'required|max:15',
            'codigo'                  => 'required|max:250',
        ];
        Artisan::call('disponibilidad:ordena', []);
        $this->validate($request, $reglas);

        return DB::transaction(function () use ($request) {
            $custodio = Custodios::where('documentoIdentificacion', 'like', $request->documentoIdentificacion)->first();
            $puesto = Puesto::where('codigo', 'like', $request->codigo)->first();

            $puestoconsole = PuestoCustodios::where('custodio_id', '=', $custodio->id)
                // ->where('puesto_id','=',$puesto->id)//pone libre todos los otros puestos
                ->get();
            $poneSalida = 0;
            foreach ($puestoconsole as $pc) {
                $p = Puesto::where('id', '=', $pc->puesto_id)->firstOrFail();
                $p->estado = 'LIBRE';
                $p->save();
                $pc->fecha_fin = Carbon::now();
                $pc->save();
                $pc->delete();
                $poneSalida++;
            }
            $transaction = $puestoconsole;
            if ($poneSalida == 0) {
                $transaction = PuestoCustodios::create([
                    'fecha_inicio'     => Carbon::now(),
                    'fecha_fin'        => Carbon::now(),
                    'horas_trabajadas' => -1,
                    'puesto_id'        => $puesto->id,
                    'custodio_id'      => $custodio->id,
                ]);
                $transaction->delete();
            }

            return $this->showMessage('Salida registrada :'.Carbon::now(), 201);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Puesto $puesto, Custodios $custodios, $id)
    {
        $pc = PuestoCustodios::where('puesto_id', '=', $puesto->id)->get();

        return $this->showAll($pc);

        return 'show';
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
        return 'update';
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
        return 'destroy';
    }
}

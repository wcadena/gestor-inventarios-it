<?php

namespace App\Http\Controllers\api;

use App\Custodios;
use App\Http\Controllers\ApiController;
use App\Puesto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PuestoController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend']);
        $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
        $this->middleware('transform.input:'.UserTransformer::class)->only(['store', 'update']);
        //$this->middleware('scope:manage-account')->only(['show', 'update']);
       /*$this->middleware('can:view,user')->only('show');
       $this->middleware('can:update,user')->only('update');
       $this->middleware('can:delete,user')->only('destroy');*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puestos = Puesto::all();

        return $this->showAll($puestos);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Puesto $puesto)
    {
        return $this->showOne($puesto);
    }

    public function puesto(Request $request)
    {
        $reglas = [
            'codigo' => 'required',
        ];
        $this->validate($request, $reglas);
        //dd($request);
        $user = Puesto::where('codigo', $request->codigo)->firstOrFail();

        return $this->showOne($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puesto $puesto)
    {
        $reglas = [
            'codigo' => 'required|unique:puesto|max:255,'.$puesto->id,
            'estado' => 'in: OCUPADO,RESERVADO,LIBRE',
        ];
        $this->validate($request, $reglas);

        if (!$puesto->estado == 'OCUPADO') {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }
        $puesto->save();

        return $this->showOne($puesto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();

        return $this->showOne($puesto);
    }

    public function verify($token)
    {
        $user = User::where('token', $token)->firstOrFail();
        $user->rol = 'usuario';
        $user->token = null;
        $user->save();

        return $this->showMessage('La cuenta ha sido verificada');
    }

    public function usuario(Request $request)
    {
        $reglas = [
            'email' => 'required|email',
        ];
        $this->validate($request, $reglas);
        $user = User::where('email', $request->email)->firstOrFail();

        return $this->showOne($user);
    }

    public function puestoCustodio(Custodios $custodios)
    {
        $puestosDeCustodio = $custodios->puestos;
        dd($puestosDeCustodio);

        return $this->showAll($puestosDeCustodio);
    }

    public function resend(User $user)
    {
        if ($user->esVerificado()) {
            return $this->errorResponse('Este usuario ya ha sido verificado.', 409);
        }
        retry(5, function () use ($user) {
            Mail::to($user)->send(new UserCreated($user));
        }, 100);

        return $this->showMessage('El correo de verificación se ha reenviado');
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\ApiController;
use App\Mail\UserCreated;
use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend']);
        /* $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
        $this->middleware('transform.input:' . UserTransformer::class)->only(['store', 'update']);
        $this->middleware('scope:manage-account')->only(['show', 'update']);
        $this->middleware('can:view,user')->only('show');
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
        $usuarios = User::all();

        return $this->showAll($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
        $this->validate($request, $reglas);
        //return 'Hello World';
        $campos = $request->all();

        $campos['first_name'] = ($request->name);
        $campos['last_name'] = ($request->name);
        $campos['empresa'] = (env('EMP_PRINCIPAL', 'Ecuatask'));
        $campos['username'] = ($request->email);

        $campos['password'] = bcrypt($request->password);

        $campos['token'] = User::generarVerificationToken();
        $campos['rol'] = 'registrado';
        $usuario = User::create($campos);

        return $this->showOne($usuario, 201); /**/
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
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
    public function update(Request $request, User $user)
    {
        $reglas = [
            'email'    => 'email|unique:users,email,'.$user->id,
            'password' => 'min:6|confirmed',
            'rol'      => 'in: usuario,administrador,system,planta_fisica,recursos_humanos,encargado_activos_fijos,sistemas',
        ];
        $this->validate($request, $reglas);
        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email') && $user->email != $request->email) {
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generarVerificationToken();
            $user->email = $request->email;
        }
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }
        /*if ($request->has('rol')) {
            $this->allowedAdminAction();

            if (!$user->esVerificado()) {
                return $this->errorResponse('Unicamente los usuarios verificados pueden cambiar su valor de administrador', 409);
            }
            $user->admin = $request->admin;
        }*/
        if (!$user->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }
        $user->save();

        return $this->showOne($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return $this->showOne($user);
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

    public function index_role(User $user)
    {
        return $this->showAll($user->roles);
    }
}

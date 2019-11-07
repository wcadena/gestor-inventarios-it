<?php

/**
 * Created by PhpStorm.
 *
 * User: wcadena
 *
 * Date: 01/08/2016
 *
 * Time: 14:18
 */

namespace App\Http\Middleware;

use App\Http\Controllers\UserApiController;
use App\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;

class AuthEmpleado
{    /**
     * Handle an incoming request.
     *
     *
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    /**
     * The Guard implementation.
     *
     *
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     *
     *
     * @param Guard $auth
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $role)
    {
        $rol_emp = $this->auth->user()->rol;
        $verificado = $this->auth->user()->verified;
        if ($verificado == 0) {
            Session::flash('flash_message', 'El usuario no esta activado, verifique su correo ('.$this->auth->user()->email.'), o coloque este enlace para reenviar mensaje: "'.url('users/'.$this->auth->user()->id.'/resend').'" o Solicite a un administrador que actualice su perfil.');
            //.(new UserApiController($this->auth->user()))->resend($this->auth->user()));
            return redirect()->action('HomeController@index')                //->route('login')                ->with('alert', trans('home.alert1', ['name' => $rol_emp, 'name2' => $role]));
        }
        /*             * verifica el permiso con el rol             */
        if (!str_contains($role, $rol_emp)) {
            if ($rol_emp == 'registrado') {
                Session::flash('flash_message', 'El Rol ("'.$rol_emp.'") no permite ver esta información, Solicitar activacion a un Administrador.');
            } elseif ($rol_emp == 'administrador') {
                Session::flash('flash_message', 'El Rol ("'.$rol_emp.'") no permite ver esta información, Cambie perfil a:'.$role.'.');
            }
            {                Session::flash('flash_message', 'El Rol ("'.$rol_emp.'") no permite ver esta información, Solicitar elevacion a un Administrador.');            }

            return redirect()->action('HomeController@index')                //->route('login')                ->with('alert', trans('home.alert1', ['name' => $rol_emp, 'name2' => $role]));
        }

        return $next($request);
    }
}

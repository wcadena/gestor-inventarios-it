<?php
/**
 * Created by PhpStorm.
 * User: wcadena
 * Date: 01/08/2016
 * Time: 14:18
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class AuthEmpleado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next,$role)
    {

        $rol_emp = $this->auth->user()->rol;
        
        if(!str_contains($role, $rol_emp)){
            return redirect()->action('HomeController@index')
                //->route('login')
                ->with('alert', trans('home.alert1',['name' => $rol_emp,'name2' => $role]));
        }
        return $next($request);

    }
}
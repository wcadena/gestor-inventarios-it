<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Session;

class UsuarioLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $usuario = User::paginate(15);

        return view('directory.usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $empresa = Empresa::orderBy('empresa', 'asc')->pluck('empresa', 'empresa');

        return view('directory.usuario.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'email'    => 'required|unique:users,email',
        ]);
        $req = $request->all();
        $req['password'] = bcrypt($req['password']);

        $req['verified'] = User::USUARIO_VERIFICADO;

        User::create($req);

        Session::flash('flash_message', 'User added!');

        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return view('directory.usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);

        if ($usuario == null) {
            Session::flash('flash_message', 'Usuario No encontrado!');

            return redirect('usuario');
        }
        $empresa = Empresa::orderBy('empresa', 'asc')->pluck('empresa', 'empresa');

        return view('directory.usuario.edit', compact('empresa', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $usuario = User::findOrFail($id);
        $request->validate([
            'custodio_id' => 'required|unique:users,custodio_id,'.$usuario->id,
            'username'    => 'required|unique:users,username,'.$usuario->id,
            'email'       => 'required|unique:users,email,'.$usuario->id,
        ]);
        if ($request['password'] != null) {
            $req = $request->all();
            $req['password'] = bcrypt($req['password']);
        } else {
            $req = $request->except('password');
        }
        $req['verified'] = User::USUARIO_VERIFICADO;
        //dd($req);
        $usuario->update($req);

        Session::flash('flash_message', 'User updated!');

        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message', 'User deleted!');

        return redirect('usuario');
    }
}

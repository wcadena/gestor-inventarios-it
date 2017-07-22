<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class UsuarioLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:administrador;system');
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
        return view('directory.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        $req['password'] = bcrypt($req['password']);
        User::create($req);

        Session::flash('flash_message', 'User added!');

        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);

        if ($usuario == null){
            Session::flash('flash_message', 'Usuario No encontrado!');
            return redirect('usuario');
        }

        return view('directory.usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $usuario = User::findOrFail($id);
        $req = $request->all();
        $req['password'] = bcrypt($req['password']);
        $usuario->update($req);

        Session::flash('flash_message', 'User updated!');

        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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

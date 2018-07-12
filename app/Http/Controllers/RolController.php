<?php

namespace App\Http\Controllers;

use App\Modulo;
use App\Permiso;
use App\Permisorol;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:system');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rol = Rol::paginate(15);

        return view('directory.rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $modulo = Modulo::all();
        /* foreach($modulo AS $item){
             dd($item->permisos);
         }*/

        return view('directory.rol.create', compact('modulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rol'         => 'required|max:255',
            'descripcion' => 'required|max:255',
            'permisos_r'  => 'required',
        ]);

        try {
            DB::beginTransaction();
            //dd($request);
            $rol = Rol::create($request->all());
            $rol->save();
            //////////////////////////////////////////////
            $equipos = Input::get('permisos_r');
            if (is_array($equipos)) {
                foreach ($equipos as $equipo) {
                    $permiso = Permiso::findOrFail($equipo)->toArray();
                    //dd($equipo);
                    $permi_rol['permiso_id'] = $permiso['id'];
                    $permi_rol['rol_id'] = $rol->id;
                    Permisorol::create($permi_rol);
                }
                // do stuff with checked friends
                Session::flash('flash_message', 'Permisos Rol added!');
            } else {
                Session::flash('flash_message', 'Error Permisos Rol added!');
                DB::rollback();
            }

            DB::commit();

            return redirect('roles');
        } catch (Exception $e) {
            DB::rollback();
        }
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
        $rol = Rol::findOrFail($id);

        return view('directory.rol.show', compact('rol'));
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
        $rol = Rol::findOrFail($id);
        $modulo = Modulo::all();

        return view('directory.rol.edit', compact('rol', 'modulo'));
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
        $this->validate($request, [
            'rol'         => 'required|max:255',
            'descripcion' => 'required|max:255',
            'permisos_r'  => 'required',
        ]);

        try {
            DB::beginTransaction();
            //dd($request);

            $rol = Rol::findOrFail($id);
            $rol->update($request->all());
            //////////////////////////////////////////////
            $perdel = Permisorol::where('rol_id', '=', $rol->id)->get();
            foreach ($perdel as $borraras2) {
                // da error aca, no se puede borrar tabla pivote de manera que se de softdelete, es mas, por favor llenar deleta_at y
                //observar que no cambia nada, se deberia borrar hard y usar $rol->permiso->pivot->delete(), consulatar en documentacion.
                $borraras2->delete();
            }
            //dd($perdel);
            $equipos = Input::get('permisos_r');
            if (is_array($equipos)) {
                foreach ($equipos as $equipo) {
                    $permiso = Permiso::findOrFail($equipo)->toArray();
                    //dd($equipo);
                    $permi_rol['permiso_id'] = $permiso['id'];
                    $permi_rol['rol_id'] = $rol->id;
                    //Permisorol::create($permi_rol);
                }
                // do stuff with checked friends
                Session::flash('flash_message', 'Permisos Rol updated!');
            } else {
                Session::flash('flash_message', 'Error Permisos Rol updated!');
                DB::rollback();
            }

            DB::commit();

            return redirect('roles');
        } catch (Exception $e) {
            DB::rollback();
        }

        return redirect('roles');
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
        Rol::destroy($id);

        Session::flash('flash_message', '¡Rol Borrado!');

        return redirect('roles');
    }
}

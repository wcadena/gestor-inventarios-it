<?php

namespace App\Http\Controllers;

use App\Modulo;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
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
        $rol = Role::paginate(15);

        return view('directory.rol.index', compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $config = config('laratrust_seeder.role_structure');
        $userPermission = config('laratrust_seeder.permission_structure');
        $mapPermission = collect(config('laratrust_seeder.permissions_map'));
        $faker = \Faker\Factory::create();
        $USER_EMAIL = 'wcadena@outlook.com';

        foreach ($config as $key => $modules) {
            if (Role::where('name', $key)->count() == 0) {
                // Create a new role
                $role = \App\Role::create([
                    'name'         => $key,
                    'display_name' => ucwords(str_replace('_', ' ', $key)),
                    'description'  => ucwords(str_replace('_', ' ', $key)),
                ]);
            } else {
                $role = Role::where('name', $key)->first();
            }
            $permissions = [];

            // Reading role permission modules
            foreach ($modules as $module => $value) {
                foreach (explode(',', $value) as $p => $perm) {
                    $permissionValue = $mapPermission->get($perm);
                    if (Permission::where('name', $permissionValue.'-'.$module)->count() == 0) {
                        $permissions[] = \App\Permission::firstOrCreate([
                            'name'         => $permissionValue.'-'.$module,
                            'display_name' => ucfirst($permissionValue).' '.ucfirst($module),
                            'description'  => ucfirst($permissionValue).' '.ucfirst($module),
                        ])->id;
                    } else {
                        $permissions[] = Permission::where('name', $permissionValue.'-'.$module)->first()->id;
                    }
                }
            }

            // Attach all permissions to the role
            $role->permissions()->sync($permissions);
        }

        Session::flash('flash_message', '¡Roles Agregados!');

        return redirect('roles');
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

        /*try {
            DB::beginTransaction();
            //dd($request);
            $rol = Role::create($request->all());
            $rol->save();
            //////////////////////////////////////////////
            $equipos = $request->permisos_r;
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
        }*/
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
        $rol = Role::findOrFail($id);

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
        $rol = Role::findOrFail($id);
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
        /*
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
                    $equipos = $request->permisos_r;
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
        */
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
        Role::destroy($id);

        Session::flash('flash_message', '¡Rol Borrado!');

        return redirect('roles');
    }
}

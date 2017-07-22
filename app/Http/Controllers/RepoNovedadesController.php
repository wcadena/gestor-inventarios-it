<?php

namespace App\Http\Controllers;

use App\Equipos;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RepoNovedades;
use App\RepoNovedadesDetalle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;
use Session;

class RepoNovedadesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('authEmp:usuario;administrador;system');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $equipo_id = Session::get('custodio_id');

        $repo_novedades = RepoNovedades::paginate(15);
        if($equipo_id!=null){

            $repo_novedades = RepoNovedades::where('custodio_id','=',$equipo_id)->paginate(15);
        }




        return view('directory.repo_novedades.index', compact('repo_novedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('directory.repo_novedades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'correo' => 'required|email|max:255',
            'observaciones' => 'required|max:255',
            'equipos' => 'required',
            'fecha_novedades' => 'required|date',
        ]);
        try{
            DB::beginTransaction();
            //dd($request);
            $rep = RepoNovedades::create($request->all());
            //////////////////////////////////////////////
            $equipos = Input::get('equipos');
            if(is_array($equipos))
            {
                foreach ($equipos as $equipo){
                    $equipo = Equipos::findOrFail($equipo)->toArray();
                    //dd($equipo);
                    $equipo['id_equipos']=$equipo['id'];
                    $equipo['repo_novedades_id']=$rep->id;

                    //dd($equipo);
                    unset($equipo['id']);
                    RepoNovedadesDetalle::create($equipo);
                }
                // do stuff with checked friends
                Session::flash('flash_message', 'RepoNovedades added!');
            }else{
                Session::flash('flash_message', 'Error RepoNovedades added!');
                DB::rollback();
            }
            //$custorm=$request->all();
            //$custorm['id_equipos']=$equip3->id;
            //RepoNovedadesDetalle::create($custorm);
            //////////////////////////////////////////////
            Session::put('custodio_id',$request->input('custodio_id'));


            DB::commit();
            return redirect('custodio_custom/'.$request->input('custodio_id'));

        }catch (Exception $e){
            DB::rollback();
        }
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
        $repo_novedade = RepoNovedades::findOrFail($id);

        return view('directory.repo_novedades.show', compact('repo_novedade'));
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
        $repo_novedade = RepoNovedades::findOrFail($id);

        return view('directory.repo_novedades.edit', compact('repo_novedade'));
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
        
        $repo_novedade = RepoNovedades::findOrFail($id);
        $repo_novedade->update($request->all());

        Session::flash('flash_message', 'RepoNovedades updated!');

        return redirect('repo_novedades');
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
        RepoNovedades::destroy($id);

        Session::flash('flash_message', 'RepoNovedades deleted!');

        return redirect('repo_novedades');
    }

}

<?php

namespace App\Http\Controllers\api;

use App\Areas;
use App\Custodios;
use App\Empresa;
use App\Http\Controllers\ApiController;
use App\Mail\NotificaCustodioCambio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CustodioController extends ApiController
{
    public function __construct()
    {
        //Auth::login(User::findOrFail(env('APP_PUESTOS_USER'))->firstOrFail());
        //dd(Auth::user());
        $this->middleware('client.credentials')->only(['store', 'resend']);
        $this->middleware('auth:api')->except(['verify', 'resend', 'notificacion']);
        /*$this->middleware('transform.input:' . UserTransformer::class)->only(['store', 'update']);
        $this->middleware('scope:manage-account')->only(['show', 'update']);
        $this->middleware('can:view,user')->only('show');
        $this->middleware('can:update,user')->only('update');
        $this->middleware('can:delete,user')->only('destroy');*/
    }

    public function boot()
    {
        parent::boot();

        Route::model('custodios', Custodios::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custodios = Custodios::all();

        return $this->showAll($custodios);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Custodios $custodio)
    {
        return $this->showOne($custodio);
    }

    /**
     * api de busqueda por cedula.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function cedula(Request $request)
    {
        $reglas = [
            'documentoIdentificacion' => 'required|max:15',
        ];
        $this->validate($request, $reglas);
        //dd(Auth::user());
        //Auth::login(User::findOrFail(env('APP_PUESTOS_USER'))->firstOrFail());
        //Auth::user()->empresa = $request->empresa;

        $custodio = Custodios::where('documentoIdentificacion', 'like', '%'.$request->documentoIdentificacion.'%')->firstOrFail();

        return $this->showOne($custodio);
    }

    /**
     * api de envio de notificacion de custodios.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function notificacion(Request $request)
    {
        //para enviar notificaciones desde la misma aplicacion, si va en el api el api pide autenticacion fuera del aplicativo, asi se ingresa dentro del app
        $reglas = [
            'id' => 'required',
        ];
        //dd($request);
        $this->validate($request, $reglas);

        $custodio = Custodios::Notificar()->where('id', $request->id)->get();
        //dd($custodio);
        if ($custodio->count() == 1) {
            $custodios = $custodio[0];
            if ($custodios->email == null || $custodios->email == '') {
                return $this->showMessage('Este Custodio no tiene correo configurado', 404);
            }
            Mail::to($custodios)
                ->queue(new NotificaCustodioCambio($custodios));
            //->send(new NotificaCustodioCambio($custodios));

            $custodios->notificado = Custodios::CUSTODIO_NO_NOTIFICADO;
            $custodios->save();

            return $this->showMessage('Se ha enviado la notificacion');
            //$this->showMessage("Se ha enviado la notificacion", 504);
        }

        return $this->showMessage('Este Custodio ya no tiene notificaciones pendientes', 404);
    }

    public function store(Request $request)
    {
        $empresa = Empresa::all()->pluck('empresa');
        $emp = '';
        foreach ($empresa as $var) {
            $emp = $emp.$var.',';
        }
        $area = Areas::all()->pluck('area');
        $are = '';
        foreach ($area as $var) {
            $are = $are.$var.',';
        }

        $request->validate([
            'pais'                    => 'required|max:255',
            'ciudad'                  => 'required|max:255',
            'direccion'               => 'required|max:255',
            'documentoIdentificacion' => 'required|unique:custodios|max:255',
            'cargo'                   => 'required|max:255',
            'compania'                => 'required|in:'.$emp,
            'telefono'                => 'required|max:255',
            'nombre_responsable'      => 'required|max:255',
            'area_piso'               => 'required|in:'.$are,
            'email'                   => 'required|email|max:255',

        ]);
        //return 'Hello World';
        //dd($custodios);
        $campos = $request->all();
        $campos['image'] = $request->image->store('', 'images');

        $custodios = Custodios::create($campos);

        return $this->showOne($custodios, 201); /**/
    }

    public function storeImagen(Request $request)
    {
        $request->validate([
            'id'    => 'required',
            'image' => 'required|imageable',
        ]);
        $custodios = Custodios::findOrFail($request->id);

        $photo = Image::make($request->image)
            ->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->encode('jpg', 80);

        $hash = md5($photo->__toString());
        $path = "{$hash}.jpg";

        Storage::disk('images')->put($path, $photo);

        $custodios->image = $path;
        $custodios->save();

        return $this->showOne($custodios, 201); /**/
    }

    public function persona(Request $request)
    {
        $reglas = [
            'nombre_completo' => 'required|min:5',
        ];
        $this->validate($request, $reglas);

        $term = strtoupper($request->nombre_completo) ?: '';
        $term = str_replace(' ', '%', "$term");

        $custodio = Custodios::where('nombre_responsable', 'like', '%'.$term.'%')->
        orwhere('cargo', 'like', '%'.$term.'%')->
        orwhere('area_piso', 'like', '%'.$term.'%')->get();

        return $this->showAll($custodio);
    }
}

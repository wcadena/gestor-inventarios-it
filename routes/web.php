<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    //adminlte_routes
});

//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/home', 'HomeController@index');
/*
 * del usuariologin
 * https://packagist.org/packages/jaapmoolenaar.nl/crud-generator
 * php artisan crud:controller UsuarioLogController --crud-name=usuario --model-name=User --view-path=directory
 * php artisan crud:view usuario --fields=name:string,first_name:string,last_name:string,rol:boolean,padrino:boolean,username:string,email:email,password:password --view-path=directory
 */
Route::resource('usuario', 'UsuarioLogController');
/*
 * fin usuariologin
 */
Route::resource('opciones_check', 'OpcionesCheckListController');
Route::resource('areas', 'AreasController');
Route::resource('modelo', 'ModeloEquipoController');
Route::resource('orden', 'OrdenDeCompraController');

Route::resource('equipos', 'EquiposController');
Route::get('equipos/{id}/image', 'EquiposController@showPicture');

Route::resource('custodio', 'CustodiosController');
Route::resource('estaciones', 'EstacionesController');
Route::resource('checklist', 'CheckListController');
Route::resource('checklist_opcionescheck', 'CheckList_OpcionesCheckListController');

Route::get('checklist_crear/{area_id}/{checklist}', 'CheckListController@crearChecklist');
Route::post('checklist_crear/{area_id}/{checklist}', 'CheckListController@crearChecklist');

Route::get('checklist_editar/{area_id}/{checklist}', 'CheckListController@editarChecklist');
Route::post('checklist_editar/{area_id}/{checklist}', 'CheckListController@editarChecklist');

Route::resource('equiposerching', 'EquiposController@home');
Route::resource('postSearch', 'EquiposController@postSearch');

Route::get('tags', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\Equipos::where('no_serie', 'like', '%'.$term.'%')->
    orwhere('codigo_barras', 'like', '%'.$term.'%')->
    orwhere('codigo_otro', 'like', '%'.$term.'%')->
    orwhere('descripcion', 'like', '%'.$term.'%')->
    orwhere('ip', 'like', '%'.$term.'%')->
    orwhere('codigo_avianca', 'like', '%'.$term.'%')->pluck('no_serie', 'id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }

    return \Response::json($valid_tags);
});

Route::resource('config', 'ConfiguracionController');

Route::get('test', function (Illuminate\Http\Request  $request) {
    $dat = App\Configuracion::Config('CUSTODIO_BODEGA');
    dd($dat);
});

Route::get('tags_custodio', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\Custodios::where('nombre_responsable', 'like', '%'.$term.'%')->
    orwhere('cargo', 'like', '%'.$term.'%')->
    orwhere('area_piso', 'like', '%'.$term.'%')->pluck('nombre_responsable', 'id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }

    return \Response::json($valid_tags);
});

Route::get('tags_checklist', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\CheckList_OpcionesCheckList::where('valor1', 'like', '%'.$term.'%')->
    orwhere('valor2', 'like', '%'.$term.'%')->
    orwhere('valor3', 'like', '%'.$term.'%')->
    orwhere('valor4', 'like', '%'.$term.'%')->pluck('atributo', 'id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }

    return \Response::json($valid_tags);
});

Route::get('tags_model', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\CheckList_OpcionesCheckList::where('valor1', 'like', '%'.$term.'%')->
    orwhere('valor2', 'like', '%'.$term.'%')->
    orwhere('valor3', 'like', '%'.$term.'%')->
    orwhere('valor4', 'like', '%'.$term.'%')->pluck('atributo', 'id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }

    return \Response::json($valid_tags);
});

Route::get('reasignar/{custodio_id}', 'EquiposController@reasignarindex');
Route::post('reasignar/{custodio_id}', 'EquiposController@reasignarindex');

Route::get('reasignarindexecho', 'EquiposController@reasignarindexecho');
Route::post('reasignarindexecho', 'EquiposController@reasignarindexecho');

Route::name('pdf')->get('pdf/{custodio_id}', 'PdfController@invoice');
Route::get('pdf_custom/{token_unico}', 'PdfController@invoiceCustom');

Route::get('checklist_crear_mini/{area_id}/{checklist}', 'CheckListController@crearChecklist_mini');
Route::post('checklist_crear_mini/{area_id}/{checklist}', 'CheckListController@crearChecklist_mini');

Route::resource('checklist_opcionescheck', 'CheckList_OpcionesCheckListController');

//Route::get('checklist_crear_option', 'CheckListController@crearChecklist');
//Route::post('checklist_crear_option', 'CheckListController@crearChecklist');

// API ROUTES ==================================
Route::group(['prefix' => 'api'], function () {
    Route::get('checklist_crear_option/{id}', 'CheckList_OpcionesCheckListController@crearChecklist_option_create');
    Route::post('checklist_crear_option', 'CheckList_OpcionesCheckListController@crearChecklist_option_storage');
    Route::delete('checklist_crear_option/{id}/delete', 'CheckList_OpcionesCheckListController@crearChecklist_option_delete');
});

Route::get('tags_model_tipo', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\ModeloEquipo::where('tipo_equipo', 'like', '%'.$term.'%')
        ->select(DB::raw('tipo_equipo'))
        ->groupby('tipo_equipo')
    ->get();

    return response()->json($tags, 200);
});
Route::get('tags_model_modelo', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\ModeloEquipo::where('modelo', 'like', '%'.$term.'%')
        ->select(DB::raw('modelo'))
        ->groupby('modelo')->get();

    return \Response::json($tags);
});

Route::resource('reporte1', 'ReporteController');

Route::get('reporte1excel', 'ReporteController@excel');

Route::get('reporteEstaciones/{estacione_id}', 'ReporteController@estaciones');
Route::get('reporte1excelEstaciones/{estacione_id}', 'ReporteController@excelEstaciones');

Route::resource('bitacora', 'BitacoraController');

Route::resource('repo_novedades', 'RepoNovedadesController');

Route::get('custodio_custom/{custodio_id}', 'CustodiosController@show_custom');
Route::post('custodio_custom', 'CustodiosController@show_custom_post');

Route::resource('informes', 'InformeMantenimientoPreventivoController');
Route::resource('ubicacion', 'UbicacionController');
Route::resource('puesto', 'PuestosController');

Route::resource('tecnico', 'InformeMantenimientoPreventivoTecnicoController');

Route::post('users/store', 'api\UserController@store');

Route::get('oautho2', function (Illuminate\Http\Request  $request) {
    return view('oauth2');
})->middleware('auth')->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');

Route::get('pusher', function (Request $request) {
    Vinkla\Pusher\Facades\Pusher::trigger('my-channel', 'my-event', ['message' => 'Hola tewst laravel']);

    $options = [
        'cluster'   => 'us2',
        'encrypted' => true,
    ];
    $pusher = new Pusher\Pusher(
        'b320838d82f185dbab9d',
        '552daa7dde66a26359ab',
        '379930',
        $options
    );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);

    return 'Manda mensaje pusher';
});

Route::get('fire-test', function (Request $request) {
    $DEFAULT_URL = env('FIRE_DATABASE_URL'); // 'https://inventario-352a6.firebaseio.com';
    $DEFAULT_TOKEN = env('FIRE_DATABASE_SECRET'); //'0KGnKhp8pLGa2Mtzm14KkOpENc1Sw5eQIagN33xQ'; //https://console.firebase.google.com/project/inventario-352a6/settings/serviceaccounts/databasesecrets?hl=es-419
    $DEFAULT_PATH = '/firebase/example';
    /**/
    $firebase = new \Firebase\FirebaseLib($DEFAULT_URL, $DEFAULT_TOKEN);

    // --- storing an array ---
    $test = [
        'foo'    => 'bar',
        'i_love' => 'lamp',
        'id'     => 42,
    ];
    $dateTime = new DateTime();
    //$firebase->set($DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

    //dd($firebase);

    // --- storing a string ---
    //$firebase->set($DEFAULT_PATH . '/name/contact001', "John Doe");

    // --- reading the stored string ---
    $name = $firebase->get($DEFAULT_PATH.'/name/contact001');

    /*
        $p = new \App\Puesto();
        $p->ubicacion_id=1;
        $p->codigo="asd7";
        $p->estado= "LIBRE";
        $p->save();
    */
    $p = new \App\Puesto();
    $p->find(7);
    $p->estado = 'OCUPADO';
    $p->update();

    dd($name);
    //dd($firebase);

    return 'Manda mensaje firebase';
});

Route::post('busqueda', 'BusquedaController@busqueda');
Route::get('busqueda', 'BusquedaController@busqueda');

Route::name('verify')->get('users/verify/{token}', 'UserApiController@verify');
Route::name('resend')->get('users/{user}/resend', 'UserApiController@resend');

Route::name('enviar_notificaciones')->get('enviar_notificaciones', 'CustodiosController@indexnotificaciones');

Route::name('verify_custodio')->get('custodio/verify/{token}', 'CustodiosController@verify');
Route::name('resend_custodio')->get('custodio/{custodios}/resend', 'CustodiosController@resend');

Route::get('custodiosNotificacion', 'api\CustodioController@notificacion');

Route::get('sendNotificacion', 'api\CustodioController@cedula');

Route::name('garantiasHP')->get('garantiasHP', 'EquiposController@garantiasHP');

Route::get('/redirect', 'Auth\Oauth2Controller@redirect');

Route::get('/callback', 'Auth\Oauth2Controller@callback');

Route::name('OauthFinal')->get('oauth_final', function (Request $request) {
    return view('oauth2_final');
});

Route::get('imagenUbicacion', 'UbicacionController@daImagen');

Route::resource('roles', 'RolController');
Route::resource('empresa', 'EmpresaController');


Route::resource('proyecto', 'ProyectoController');
//php artisan crud:controller ProyectoController --crud-name=proyecto --model-name=Proyecto --view-path="directory"
//php artisan crud:view proyecto --fields="name#string; descripcion#text" --view-path="directory" --form-helper=laravelcollective

Route::resource('proyecto/{proyecto_id}/proyecto_seccion', 'ProyectoSeccionController');
//php artisan crud:controller ProyectoSeccionController --crud-name=proyecto_seccion --model-name=ProyectoSeccion --view-path="directory"
//php artisan crud:view proyecto_seccion --fields="proyecto_id#integer; name#string; descripcion#text;tipo#select#options={"titulo": "Titulo", "seccion": "Seccion"};orden#integer" --view-path="directory"  	 	--form-helper=laravelcollective

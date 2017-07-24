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
    #adminlte_routes
});

//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/home', 'HomeController@index');
/**
 * del usuariologin
 * https://packagist.org/packages/jaapmoolenaar.nl/crud-generator
 * php artisan crud:controller UsuarioLogController --crud-name=usuario --model-name=User --view-path=directory
 * php artisan crud:view usuario --fields=name:string,first_name:string,last_name:string,rol:boolean,padrino:boolean,username:string,email:email,password:password --view-path=directory
 */
Route::resource('usuario', 'UsuarioLogController');
/**
 * fin usuariologin
 */
Route::resource('opciones_check', 'OpcionesCheckListController');
Route::resource('areas', 'AreasController');
Route::resource('modelo', 'ModeloEquipoController');
Route::resource('orden', 'OrdenDeCompraController');

Route::resource('equipos', 'EquiposController');
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
    $term = str_replace(" ", "%", "$term");
    $tags= App\Equipos::where('no_serie', 'like', '%'.$term.'%')->
    orwhere('codigo_barras', 'like', '%'.$term.'%')->
    orwhere('codigo_otro', 'like', '%'.$term.'%')->
    orwhere('descripcion', 'like', '%'.$term.'%')->
    orwhere('ip', 'like', '%'.$term.'%')->
    orwhere('codigo_avianca', 'like', '%'.$term.'%')->pluck('no_serie','id');
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
    $term = str_replace(" ", "%", "$term");
    $tags= App\Custodios::where('nombre_responsable', 'like', '%'.$term.'%')->
    orwhere('cargo', 'like', '%'.$term.'%')->
    orwhere('area_piso', 'like', '%'.$term.'%')->pluck('nombre_responsable','id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }
    return \Response::json($valid_tags);
});

Route::get('tags_checklist', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(" ", "%", "$term");
    $tags= App\CheckList_OpcionesCheckList::where('valor1', 'like', '%'.$term.'%')->
    orwhere('valor2', 'like', '%'.$term.'%')->
    orwhere('valor3', 'like', '%'.$term.'%')->
    orwhere('valor4', 'like', '%'.$term.'%')->pluck('atributo','id');
    $valid_tags = [];
    foreach ($tags as $id => $tag) {
        $valid_tags[] = ['id' => $id, 'text' => $tag];
    }
    return \Response::json($valid_tags);
});

Route::get('tags_model', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(" ", "%", "$term");
    $tags= App\CheckList_OpcionesCheckList::where('valor1', 'like', '%'.$term.'%')->
    orwhere('valor2', 'like', '%'.$term.'%')->
    orwhere('valor3', 'like', '%'.$term.'%')->
    orwhere('valor4', 'like', '%'.$term.'%')->pluck('atributo','id');
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


Route::get('pdf/{custodio_id}', 'PdfController@invoice');

Route::get('checklist_crear_mini/{area_id}/{checklist}', 'CheckListController@crearChecklist_mini');
Route::post('checklist_crear_mini/{area_id}/{checklist}', 'CheckListController@crearChecklist_mini');


Route::resource('checklist_opcionescheck', 'CheckList_OpcionesCheckListController');

//Route::get('checklist_crear_option', 'CheckListController@crearChecklist');
//Route::post('checklist_crear_option', 'CheckListController@crearChecklist');

// API ROUTES ==================================
Route::group(array('prefix' => 'api'), function() {
    Route::get('checklist_crear_option/{id}', 'CheckList_OpcionesCheckListController@crearChecklist_option_create');
    Route::post('checklist_crear_option', 'CheckList_OpcionesCheckListController@crearChecklist_option_storage');
    Route::delete('checklist_crear_option/{id}/delete', 'CheckList_OpcionesCheckListController@crearChecklist_option_delete');
});

Route::get('tags_model_tipo', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(" ", "%", "$term");
    $tags= App\ModeloEquipo::where('tipo_equipo', 'like', '%'.$term.'%')->groupby('tipo_equipo')->pluck('tipo_equipo');
    return \Response::json($tags);
});
Route::get('tags_model_modelo', function (Illuminate\Http\Request  $request) {
    $term = $request->term ?: '';
    $term = str_replace(" ", "%", "$term");
    $tags= App\ModeloEquipo::where('modelo', 'like', '%'.$term.'%')->groupby('modelo')->pluck('modelo');
    return \Response::json($tags);
});

Route::resource('reporte1', 'ReporteController');

Route::get('reporte1excel', 'ReporteController@excel');

Route::resource('bitacora', 'BitacoraController');

Route::resource('repo_novedades', 'RepoNovedadesController');

Route::get('custodio_custom/{custodio_id}', 'CustodiosController@show_custom');
Route::post('custodio_custom', 'CustodiosController@show_custom_post');

Route::resource('informes', 'InformeMantenimientoPreventivoController');
Route::resource('ubicacion', 'UbicacionController');

Route::resource('tecnico', 'InformeMantenimientoPreventivoTecnicoController');

Route::post('users/store', 'api\UserController@store');

Route::get('oautho2', function (Illuminate\Http\Request  $request) {
   return view('oauth2');
});
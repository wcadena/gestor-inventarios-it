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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    //adminlte_routes
    /*Route::get('files', 'FileEntriesController@index');
    Route::get('files/create', 'FileEntriesController@create');
    Route::post('files/upload-file', 'FileEntriesController@uploadFile');

    Route::get('files/{path_file}/{file}', function ($path_file = null, $file = null) {
        $path = storage_path().'/files/uploads/'.$path_file.'/'.$file;
        if (file_exists($path)) {
            return Response::download($path);
        }
    });*/
});
Route::prefix('files')->name('files.')->group(function () {
    Route::resource('file', 'FileEntriesController');
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

Route::get('tags', function (Illuminate\Http\Request $request) {
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

Route::get('test', function (Illuminate\Http\Request $request) {
    $dat = App\Configuracion::Config('CUSTODIO_BODEGA');
    dd($dat);
});

Route::get('tags_custodio', function (Illuminate\Http\Request $request) {
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

Route::get('tags_checklist', function (Illuminate\Http\Request $request) {
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

Route::get('tags_model', function (Illuminate\Http\Request $request) {
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

Route::get('tags_model_tipo', function (Illuminate\Http\Request $request) {
    $term = $request->term ?: '';
    $term = str_replace(' ', '%', "$term");
    $tags = App\ModeloEquipo::where('tipo_equipo', 'like', '%'.$term.'%')
        ->select(DB::raw('tipo_equipo'))
        ->groupby('tipo_equipo')
        ->get();

    return response()->json($tags, 200);
});
Route::get('tags_model_modelo', function (Illuminate\Http\Request $request) {
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

Route::get('oautho2', function (Illuminate\Http\Request $request) {
    return view('oauth2');
})->middleware('auth')->middleware('authEmp:administrador;system;planta_fisica;recursos_humanos;encargado_activos_fijos;sistemas');

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

Route::resource('proyecto.proyecto_seccion', 'ProyectoSeccionController');
//php artisan crud:controller ProyectoSeccionController --crud-name=proyecto_seccion --model-name=ProyectoSeccion --view-path="directory"
//php artisan crud:view proyecto_seccion --fields="proyecto_id#integer; name#string; descripcion#text;tipo#select#options={"titulo": "Titulo", "seccion": "Seccion"};orden#integer" --view-path="directory"  	 	--form-helper=laravelcollective
//////////////////////////////////////////////
/// del template nuevo
/// ///////////////////////////////////////////

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
});
Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');

/**
 * Project.
 */
Route::namespace('Project')->prefix('project')->name('project.')->group(function () {
    Route::prefix('client')->as('client.')->group(function () {
        //Route::get('login', 'Auth\LoginController@showClientLoginForm')->name('login')->middleware(['XSS']);
        //Route::post('login', 'Auth\LoginController@clientLogin')->name('login')->middleware(['XSS']);
        //Route::post('logout', 'ClientController@clientLogout')->name('logout')->middleware(['auth:client','XSS']);

        Route::get('/my-account', ['as' => 'users.my.account', 'uses' =>'UserController@account'])->middleware(['auth:client', 'XSS']);
        Route::post('/my-account', ['as' => 'update.account', 'uses' =>'UserController@update'])->middleware(['auth:client', 'XSS']);
        Route::post('/my-account/password', ['as' => 'update.password', 'uses' =>'UserController@updatePassword'])->middleware(['auth:client', 'XSS']);
        Route::delete('/my-account', ['as' => 'delete.avatar', 'uses' =>'UserController@deleteAvatar'])->middleware(['auth:client', 'XSS']);

        // project
        Route::get('/{slug}/projects', ['as' => 'projects.index', 'uses' =>'ProjectController@index'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}', ['as' => 'projects.show', 'uses' =>'ProjectController@show'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone', 'uses' =>'ProjectController@milestone'])->middleware(['auth:client', 'XSS']);
        Route::post('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.store', 'uses' =>'ProjectController@milestoneStore'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/milestone/{id}/show', ['as' => 'projects.milestone.show', 'uses' =>'ProjectController@milestoneShow'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/milestone/{id}/edit', ['as' => 'projects.milestone.edit', 'uses' =>'ProjectController@milestoneEdit'])->middleware(['auth:client', 'XSS']);
        Route::put('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.update', 'uses' =>'ProjectController@milestoneUpdate'])->middleware(['auth:client', 'XSS']);
        Route::delete('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.destroy', 'uses' =>'ProjectController@milestoneDestroy'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/file/{fid}', ['as' => 'projects.file.download', 'uses' =>'ProjectController@fileDownload'])->middleware(['auth:client', 'XSS']);

        // Task Board
        Route::get('/{slug}/projects/{id}/task-board', ['as' => 'projects.task.board', 'uses' =>'ProjectController@taskBoard'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/task-board/create', ['as' => 'tasks.create', 'uses' =>'ProjectController@taskCreate'])->middleware(['auth:client', 'XSS']);
        Route::post('/{slug}/projects/{id}/task-board', ['as' => 'tasks.store', 'uses' =>'ProjectController@taskStore'])->middleware(['auth:client', 'XSS']);
        Route::put('/{slug}/projects/{id}/task-board/order', ['as' => 'tasks.update.order', 'uses' =>'ProjectController@taskOrderUpdate'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/task-board/edit/{tid}', ['as' => 'tasks.edit', 'uses' =>'ProjectController@taskEdit'])->middleware(['auth:client', 'XSS']);
        Route::put('/{slug}/projects/{id}/task-board/{tid}', ['as' => 'tasks.update', 'uses' =>'ProjectController@taskUpdate'])->middleware(['auth:client', 'XSS']);
        Route::delete('/{slug}/projects/{id}/task-board/{tid}', ['as' => 'tasks.destroy', 'uses' =>'ProjectController@taskDestroy'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/task-board/{tid}/{cid?}', ['as' => 'tasks.show', 'uses' =>'ProjectController@taskShow'])->middleware(['auth:client', 'XSS']);

        Route::get('/{slug}/projects/timesheet/{id}', ['as' => 'projects.timesheet', 'uses' =>'ProjectController@timesheet'])->middleware(['auth:client', 'XSS']);

        // bug report
        Route::get('/{slug}/projects/{id}/bug_report', ['as' => 'projects.bug.report', 'uses' =>'ProjectController@bugReport'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/bug_report/create', ['as' => 'projects.bug.report.create', 'uses' =>'ProjectController@bugReportCreate'])->middleware(['auth:client', 'XSS']);
        Route::post('/{slug}/projects/{id}/bug_report', ['as' => 'projects.bug.report.store', 'uses' =>'ProjectController@bugReportStore'])->middleware(['auth:client', 'XSS']);
        Route::put('/{slug}/projects/{id}/bug_report/order', ['as' => 'projects.bug.report.update.order', 'uses' =>'ProjectController@bugReportOrderUpdate'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/bug_report/{bid}/show', ['as' => 'projects.bug.report.show', 'uses' =>'ProjectController@bugReportShow'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug}/projects/{id}/bug_report/{bid}/edit', ['as' => 'projects.bug.report.edit', 'uses' =>'ProjectController@bugReportEdit'])->middleware(['auth:client', 'XSS']);
        Route::put('/{slug}/projects/{id}/bug_report/{bid}', ['as' => 'projects.bug.report.update', 'uses' =>'ProjectController@bugReportUpdate'])->middleware(['auth:client', 'XSS']);
        Route::delete('/{slug}/projects/{id}/bug_report/{bid}', ['as' => 'projects.bug.report.destroy', 'uses' =>'ProjectController@bugReportDestroy'])->middleware(['auth:client', 'XSS']);

        Route::get('/{slug}/searchJson/{search?}', ['as' => 'search.json', 'uses' =>'ProjectController@getSearchJson'])->middleware(['auth:client', 'XSS']);
        Route::get('/userProjectJson/{id}', ['as' => 'user.project.json', 'uses' =>'UserController@getProjectUserJson'])->middleware(['auth:client', 'XSS']);
        Route::get('/projectMilestoneJson/{id}', ['as' => 'project.milestone.json', 'uses' =>'UserController@getProjectMilestoneJson'])->middleware(['auth:client', 'XSS']);
        Route::get('/{slug?}', ['as' => 'home', 'uses' =>'HomeController@index'])->middleware(['auth:client', 'XSS'])->name('home.index');
    });

    // Calender

    Route::get('/{slug}/calender', ['as' => 'calender.index', 'uses' =>'CalenderController@index'])->middleware(['auth', 'XSS']);

    //Client

    Route::get('/{slug}/clients', ['as' => 'clients.index', 'uses' =>'ClientController@index'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/clients', ['as' => 'clients.store', 'uses' =>'ClientController@store'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/clients/create', ['as' => 'clients.create', 'uses' =>'ClientController@create'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/clients/edit/{id}', ['as' => 'clients.edit', 'uses' =>'ClientController@edit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/clients/{id}', ['as' => 'clients.update', 'uses' =>'ClientController@update'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/clients/{id}', ['as' => 'clients.destroy', 'uses' =>'ClientController@destroy'])->middleware(['auth', 'XSS']);
    // User
    Route::get('/usersJson', ['as' => 'user.email.json', 'uses' =>'UserController@getUserJson'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/searchJson/{search?}', ['as' => 'search.json', 'uses' =>'ProjectController@getSearchJson'])->middleware(['auth', 'XSS']);
    Route::get('/userProjectJson/{id}', ['as' => 'user.project.json', 'uses' =>'UserController@getProjectUserJson'])->middleware(['auth', 'XSS']);
    Route::get('/projectMilestoneJson/{id}', ['as' => 'project.milestone.json', 'uses' =>'UserController@getProjectMilestoneJson'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/users', ['as' => 'users.index', 'uses' =>'UserController@index'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/users/invite', ['as' => 'users.invite', 'uses' =>'UserController@invite'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/users/invite', ['as' => 'users.invite.update', 'uses' =>'UserController@inviteUser'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/users/edit/{id}', ['as' => 'users.edit', 'uses' =>'UserController@edit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/users/update/{id}', ['as' => 'users.update', 'uses' =>'UserController@update'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/users/{id}', ['as' => 'users.remove', 'uses' =>'UserController@removeUser'])->middleware(['auth', 'XSS']);

    Route::get('/my-account', ['as' => 'users.my.account', 'uses' =>'UserController@account'])->middleware(['auth', 'XSS']);
    Route::post('/my-account', ['as' => 'update.account', 'uses' =>'UserController@update'])->middleware(['auth', 'XSS']);
    Route::post('/my-account/password', ['as' => 'update.password', 'uses' =>'UserController@updatePassword'])->middleware(['auth', 'XSS']);
    Route::delete('/my-account', ['as' => 'delete.avatar', 'uses' =>'UserController@deleteAvatar'])->middleware(['auth', 'XSS']);

    Route::get('/', 'HomeController@index')->middleware(['auth', 'XSS'])->name('home.get');
    Route::get('/{slug?}', ['as' => 'home', 'uses' =>'HomeController@index'])->middleware(['auth', 'XSS']);

    // Workspace
    Route::get('/workspace/rename/{id}', ['as' => 'rename_workspace', 'uses' =>'WorkspaceController@rename'])->middleware(['auth', 'XSS']);
    Route::put('/workspace/update/{id}', ['as' => 'update_workspace', 'uses' =>'WorkspaceController@update'])->middleware(['auth', 'XSS']);
    Route::post('/workspace', ['as' => 'add_workspace', 'uses' =>'WorkspaceController@store'])->middleware(['auth', 'XSS']);
    Route::delete('/workspace/{id}', ['as' => 'delete_workspace', 'uses' =>'WorkspaceController@destroy'])->middleware(['auth', 'XSS']);
    Route::delete('/workspace/leave/{id}', ['as' => 'leave_workspace', 'uses' =>'WorkspaceController@leave'])->middleware(['auth', 'XSS']);
    Route::get('/workspace/{id}', ['as' => 'change_workspace', 'uses' =>'WorkspaceController@changeCurrantWorkspace'])->middleware(['auth', 'XSS']);
    Route::get('/workspace/{slug}/change_lang/{lang}', ['as' => 'change_lang_workspace', 'uses' =>'WorkspaceController@changeLangWorkspace'])->middleware(['auth', 'XSS']);
    Route::get('/workspace/{slug}/lang/create', ['as' => 'create_lang_workspace', 'uses' =>'WorkspaceController@createLangWorkspace'])->middleware(['auth', 'XSS']);
    Route::get('/workspace/{slug}/lang/{lang}', ['as' => 'lang_workspace', 'uses' =>'WorkspaceController@langWorkspace'])->middleware(['auth', 'XSS']);
    Route::post('/workspace/{slug}/lang/{lang}', ['as' => 'store_lang_data_workspace', 'uses' =>'WorkspaceController@storeLangDataWorkspace'])->middleware(['auth', 'XSS']);
    Route::post('/workspace/{slug}/lang', ['as' => 'store_lang_workspace', 'uses' =>'WorkspaceController@storeLangWorkspace'])->middleware(['auth', 'XSS']);

    // project
    Route::get('/{slug}/projects', ['as' => 'projects.index', 'uses' =>'ProjectController@index'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/create', ['as' => 'projects.create', 'uses' =>'ProjectController@create'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}', ['as' => 'projects.show', 'uses' =>'ProjectController@show'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects', ['as' => 'projects.store', 'uses' =>'ProjectController@store'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/edit/{id}', ['as' => 'projects.edit', 'uses' =>'ProjectController@edit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/{id}', ['as' => 'projects.update', 'uses' =>'ProjectController@update'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}', ['as' => 'projects.destroy', 'uses' =>'ProjectController@destroy'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/leave/{id}', ['as' => 'projects.leave', 'uses' =>'ProjectController@leave'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/invite/{id}', ['as' => 'projects.invite.popup', 'uses' =>'ProjectController@popup'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}/user/{uid}', ['as' => 'projects.user.delete', 'uses' =>'ProjectController@userDelete'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/share/{id}', ['as' => 'projects.share.popup', 'uses' =>'ProjectController@sharePopup'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/share/{id}', ['as' => 'projects.share', 'uses' =>'ProjectController@share'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/invite/{id}', ['as' => 'projects.invite.update', 'uses' =>'ProjectController@invite'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/client/{uid}/permission', ['as' => 'projects.client.permission', 'uses' =>'ProjectController@clientPermission'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/{id}/client/{uid}/permission', ['as' => 'projects.client.permission.store', 'uses' =>'ProjectController@clientPermissionStore'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}/client/{uid}', ['as' => 'projects.client.delete', 'uses' =>'ProjectController@clientDelete'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone', 'uses' =>'ProjectController@milestone'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.store', 'uses' =>'ProjectController@milestoneStore'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/milestone/{id}/show', ['as' => 'projects.milestone.show', 'uses' =>'ProjectController@milestoneShow'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/milestone/{id}/edit', ['as' => 'projects.milestone.edit', 'uses' =>'ProjectController@milestoneEdit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.update', 'uses' =>'ProjectController@milestoneUpdate'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/milestone/{id}', ['as' => 'projects.milestone.destroy', 'uses' =>'ProjectController@milestoneDestroy'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/{id}/file', ['as' => 'projects.file.upload', 'uses' =>'ProjectController@fileUpload'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/file/{fid}', ['as' => 'projects.file.download', 'uses' =>'ProjectController@fileDownload'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}/file/delete/{fid}', ['as' => 'projects.file.delete', 'uses' =>'ProjectController@fileDelete'])->middleware(['auth', 'XSS']);

    // Task Board
    Route::get('/{slug}/projects/client/task-board/{code}', ['as' => 'projects.client.task.board', 'uses' =>'ProjectController@taskBoard']);
    Route::get('/{slug}/projects/{id}/task-board', ['as' => 'projects.task.board', 'uses' =>'ProjectController@taskBoard'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/task-board/create', ['as' => 'tasks.create', 'uses' =>'ProjectController@taskCreate'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/{id}/task-board', ['as' => 'tasks.store', 'uses' =>'ProjectController@taskStore'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/{id}/task-board/order', ['as' => 'tasks.update.order', 'uses' =>'ProjectController@taskOrderUpdate']);
    Route::get('/{slug}/projects/{id}/task-board/edit/{tid}', ['as' => 'tasks.edit', 'uses' =>'ProjectController@taskEdit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/{id}/task-board/{tid}', ['as' => 'tasks.update', 'uses' =>'ProjectController@taskUpdate'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}/task-board/{tid}', ['as' => 'tasks.destroy', 'uses' =>'ProjectController@taskDestroy'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/task-board/{tid}/{cid?}', ['as' => 'tasks.show', 'uses' =>'ProjectController@taskShow']);

    // Timesheet
    Route::get('/{slug}/projects/timesheet/{id}', ['as' => 'projects.timesheet', 'uses' =>'ProjectController@timesheet'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/timesheet/create/{id}', ['as' => 'projects.timesheet.create', 'uses' =>'ProjectController@timesheetCreate'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/timesheet/{id}', ['as' => 'projects.timesheet.store', 'uses' =>'ProjectController@timesheetStore'])->middleware(['auth', 'XSS']);
    //Route::get('/{slug}/projects/timesheet/{id}/show',['as' => 'projects.timesheet.show','uses' =>'ProjectController@timesheetShow'])->middleware(['auth','XSS']);
    Route::get('/{slug}/projects/timesheet/{id}/edit', ['as' => 'projects.timesheet.edit', 'uses' =>'ProjectController@timesheetEdit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/timesheet/{id}', ['as' => 'projects.timesheet.update', 'uses' =>'ProjectController@timesheetUpdate'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/timesheet/{id}', ['as' => 'projects.timesheet.destroy', 'uses' =>'ProjectController@timesheetDestroy'])->middleware(['auth', 'XSS']);

    Route::post('/{slug}/projects/{id}/comment/{tid}/file/{cid?}', ['as' => 'comment.store.file', 'uses' =>'ProjectController@commentStoreFile']);
    Route::delete('/{slug}/projects/{id}/comment/{tid}/file/{fid}', ['as' => 'comment.destroy.file', 'uses' =>'ProjectController@commentDestroyFile']);
    Route::post('/{slug}/projects/{id}/comment/{tid}/{cid?}', ['as' => 'comment.store', 'uses' =>'ProjectController@commentStore']);
    Route::delete('/{slug}/projects/{id}/comment/{tid}/{cid}', ['as' => 'comment.destroy', 'uses' =>'ProjectController@commentDestroy']);
    Route::post('/{slug}/projects/{id}/sub-task/{tid}/{cid?}', ['as' => 'subtask.store', 'uses' =>'ProjectController@subTaskStore']);
    Route::put('/{slug}/projects/{id}/sub-task/{stid}', ['as' => 'subtask.update', 'uses' =>'ProjectController@subTaskUpdate']);
    Route::delete('/{slug}/projects/{id}/sub-task/{stid}', ['as' => 'subtask.destroy', 'uses' =>'ProjectController@subTaskDestroy']);

    // todo
    //Route::get('/{slug}/todo',['as' => 'todos.index','uses' =>'TodoController@index'])->middleware(['auth','XSS']);
    //Route::post('/{slug}/todo',['as' => 'todos.store','uses' =>'TodoController@store'])->middleware(['auth','XSS']);
    //Route::put('/{slug}/todo',['as' => 'todos.update','uses' =>'TodoController@update'])->middleware(['auth','XSS']);
    //Route::delete('/{slug}/todo',['as' => 'todos.destroy','uses' =>'TodoController@destroy'])->middleware(['auth','XSS']);

    // note
    Route::get('/{slug}/notes', ['as' => 'notes.index', 'uses' =>'NoteController@index'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/notes/create', ['as' => 'notes.create', 'uses' =>'NoteController@create'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/notes', ['as' => 'notes.store', 'uses' =>'NoteController@store'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/notes/edit/{id}', ['as' => 'notes.edit', 'uses' =>'NoteController@edit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/notes/{id}', ['as' => 'notes.update', 'uses' =>'NoteController@update'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/notes/{id}', ['as' => 'notes.destroy', 'uses' =>'NoteController@destroy'])->middleware(['auth', 'XSS']);

    // bug report
    Route::get('/{slug}/projects/{id}/bug_report', ['as' => 'projects.bug.report', 'uses' =>'ProjectController@bugReport'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/bug_report/create', ['as' => 'projects.bug.report.create', 'uses' =>'ProjectController@bugReportCreate'])->middleware(['auth', 'XSS']);
    Route::post('/{slug}/projects/{id}/bug_report', ['as' => 'projects.bug.report.store', 'uses' =>'ProjectController@bugReportStore'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/{id}/bug_report/order', ['as' => 'projects.bug.report.update.order', 'uses' =>'ProjectController@bugReportOrderUpdate'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/bug_report/{bid}/show', ['as' => 'projects.bug.report.show', 'uses' =>'ProjectController@bugReportShow'])->middleware(['auth', 'XSS']);
    Route::get('/{slug}/projects/{id}/bug_report/{bid}/edit', ['as' => 'projects.bug.report.edit', 'uses' =>'ProjectController@bugReportEdit'])->middleware(['auth', 'XSS']);
    Route::put('/{slug}/projects/{id}/bug_report/{bid}', ['as' => 'projects.bug.report.update', 'uses' =>'ProjectController@bugReportUpdate'])->middleware(['auth', 'XSS']);
    Route::delete('/{slug}/projects/{id}/bug_report/{bid}', ['as' => 'projects.bug.report.destroy', 'uses' =>'ProjectController@bugReportDestroy'])->middleware(['auth', 'XSS']);

    Route::post('/{slug}/projects/{id}/bug_comment/{tid}/file/{cid?}', ['as' => 'bug.comment.store.file', 'uses' =>'ProjectController@bugStoreFile']);
    Route::delete('/{slug}/projects/{id}/bug_comment/{tid}/file/{fid}', ['as' => 'bug.comment.destroy.file', 'uses' =>'ProjectController@bugDestroyFile']);
    Route::post('/{slug}/projects/{id}/bug_comment/{tid}/{cid?}', ['as' => 'bug.comment.store', 'uses' =>'ProjectController@bugCommentStore']);
    Route::delete('/{slug}/projects/{id}/bug_comment/{tid}/{cid}', ['as' => 'bug.comment.destroy', 'uses' =>'ProjectController@bugCommentDestroy']);

    // calendar
//Route::get('/{slug}/calendar',['as' => 'calendar.index','uses' =>'CalendarController@index'])->middleware(['auth','XSS']);
//Route::post('/{slug}/calendar',['as' => 'calendar.store','uses' =>'CalendarController@store'])->middleware(['auth','XSS']);
//Route::delete('/{slug}/calendar',['as' => 'calendar.destroy','uses' =>'CalendarController@destroy'])->middleware(['auth','XSS']);
//Route::put('/{slug}/calendar',['as' => 'calendar.update','uses' =>'CalendarController@update'])->middleware(['auth','XSS']);
//Route::put('/{slug}/calendar/date',['as' => 'calendar.updateDate','uses' =>'CalendarController@updateDate'])->middleware(['auth','XSS']);
//Route::post('/{slug}/calendar/json',['as' => 'calendar.getJson','uses' =>'CalendarController@getJson'])->middleware(['auth','XSS']);
//Route::post('/{slug}/event',['as' => 'event.store','uses' =>'CalendarController@eventStore'])->middleware(['auth','XSS']);
});

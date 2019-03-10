<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});*/
Route::resource('role', 'api\RoleController', ['only' => ['index', 'show']]);
Route::get('role/user/{role}', 'api\RoleController@index_user')->name('role.user');

Route::resource('users', 'api\UserController', ['excepto' => 'create,edit']);
Route::get('users/role/{user}', 'api\UserController@index_role')->name('user.role');

Route::get('users/verificar', 'api\UserController@verify');

Route::get('usuario', 'api\UserController@usuario');

Route::resource('info', 'api\InformeMantenimientoPreventivoController', ['excepto' => 'create,edit']);

//Route::post('oauth/token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

Route::resource('puestos', 'api\PuestoController', ['excepto' => 'create']);
Route::resource('puestos.custodios', 'api\PuestoCustodioController');
Route::resource('ubicacions', 'api\UbicacionController', ['excepto' => 'create']);

Route::get('puesto_asigna', 'api\PuestoCustodioController@asigna');
Route::get('puesto_liberar', 'api\PuestoCustodioController@liberar');
Route::resource('custodios', 'api\CustodioController', ['only' => ['index', 'show', 'store']]);
Route::resource('custodios.puestos', 'api\CustodioPuestoController');
Route::get('custodiosCedula', 'api\CustodioController@cedula');
Route::get('custodiosBuscar', 'api\CustodioController@persona');
Route::post('custodiosSetImage', 'api\CustodioController@storeImagen');

Route::resource('/empresas', 'api\EmpresaController', ['excepto' => 'create']);
Route::resource('/areas', 'api\AreasController', ['only' => ['index', 'show', 'store'], 'parameters' => [
    'areas'                                                  => 'areas', ]]);
Route::resource('/equipos', 'api\EquiposController', ['only' => ['index', 'show', 'store'], 'parameters' => [
    'equipos'                                                                  => 'equipos', ]]);
Route::resource('/equipos.checkList', 'api\EquipoCheckListController', ['only' => ['index', 'store'], 'parameters' => [
    'equipos' => 'equipos', ]]);

Route::get('equipo_no_serie', 'api\EquiposController@equipo_no_serie');
Route::resource('/checkList', 'api\CheckListController', ['only' => ['index', 'show', 'store']]);
Route::resource('/check_list__opciones_check_lists', 'api\CheckList_OpcionesCheckListController', ['only' => ['index', 'show', 'store']]);

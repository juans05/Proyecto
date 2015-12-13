<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});


Route::resource('usuario', 'usuarioController');
Route::resource('empresa', 'EmpresaController');
Route::resource('trabajador', 'TrabajadorController');
Route::resource('Rol', 'TrabajadorController');
Route::resource('perfil', 'PerfilController');
Route::resource('permiso', 'PermisoController');


Route::resource('alumno', 'AlumnoController',
    ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::get('/alumno',['as'=>'alumno.index','uses'=>'AlumnoController@index']);

Route::get('/alumno/{idAlumno}',['as'=>'alumno.apoderado','uses'=>'AlumnoController@listarAlumnoApoderado']);
Route::get('/alumno_personalizado/{idAlumno}',['as'=>'alumno.datos','uses'=>'AlumnoController@AlumnoApoderado']);


Route::group(['middleware'=>['auth','Administrador'],'prefix'=>'admin'],function(){
    Route::resource('perfil', 'PerfilController');
});
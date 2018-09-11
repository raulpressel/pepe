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

use App\Localidad;


Route::get('/', function () {
    return view('home');
});


Route::group(['prefix' => 'administracion'], function () {
    Voyager::routes();
});
Route::get('login', ['as' => 'login', 'uses'=>'Auth\LoginController@showLoginForm']);

Route::get('/home', 'HomeController@index')->name('home');


/*Esto es el restfull de datos*/

Route::resource('datospersona', 'DatosPersonaController');
Auth::routes();

Route::get('datospersona/carrera/{id}', 'DatosPersonaController@getCarreras');


//Rutas para no logeados
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('requisitos', function () {
    return view('requisitos');
});


Route::resource('selects', 'ProvinciaController');

Route::get('datospersona/localidad/{id}', 'DatosPersonaController@getLocalidades');

Route::post('administracion/inscripciones/seleccion', 'InscripcionesController@seleccion')->name('seleccion'); //seleccion de beca


Route::get('administracion/inscripciones/seleccion/usuario/datos_usuario/{user_id}', 'InscripcionesController@datos_usuario')->name('datos_usuario'); //VER LOS DATOS INSCRIPTS

Route::get('administracion/inscripciones/seleccion/usuario/datos_usuario/{user_id}/{dato}', 'InscripcionesController@datos_usuario')->name('modif-dato'); //MODIFICA LOS DATOS


Route::get('administracion/inscripciones/seleccion/{user_id}/obsevacion', 'InscripcionesController@observacion' )->name('observacion'); //ve la obs


Route::post('guarda_observacion', 'InscripcionesController@guarda_observacion' )->name('guarda_observacion'); //ve la obs



Route::get('storage/{filename}', 'InscripcionesController@getFile')->where('filename', '^[^/]+$');


Route::post('administracion/inscripciones/usuarios/datos_usuario', 'DatosPersonaController@revision')->name('rev');//para revision

Route::post('carga', 'InscripcionesController@carga')->name('carga');//para carga postulante y sus valores de revision


Route::get('/dar_baja_inscripcion/{id}','InscripcionesController@dar_baja_inscripcion')->name('dar_baja_inscripcion');// Baja postulante

Route::post('administracion/inscripciones/seleccion/otorgadas', 'InscripcionesController@otorgar')->name('otorgar');//para otorgar becas en el listado

Route::get('pdf','InscripcionesController@generarPdf')->name('generate-pdf');




   // Backup routes
Route::get('/administracion/backup', 'BackupController@index');
Route::get('/administracion/backup/create', 'BackupController@create');
Route::get('/administracion/backup/download/{file_name}', ['as'=>'backDownload', 'uses'=>'BackupController@download']);
Route::get('/administracion/backup/delete/{file_name}', 'BackupController@delete');
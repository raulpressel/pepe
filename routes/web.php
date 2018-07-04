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


//Rutas para no logeados
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('requisitos', function () {
    return view('requisitos');
});


Route::resource('selects', 'ProvinciaController');

Route::get('datospersona/localidad/{id}', 'DatosPersonaController@getLocalidades');

Route::post('pdf', 'InscripcionesController@pdf')->name('pdf');//para pdf

Route::post('/administracion/inscripciones/seleccion', 'InscripcionesController@seleccion')->name('seleccion'); //seleccion de beca
Route::get('administracion/inscripciones/usuarios/datos_usuario/{user_id}', 'InscripcionesController@datos_usuario')->name('datos_usuario'); //VER LOS DATOS INSCRIPTS

Route::get('storage/{filename}', 'InscripcionesController@getFile')->where('filename', '^[^/]+$');

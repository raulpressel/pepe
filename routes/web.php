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


Route::get('pdf', 'InscripcionesController@pdf')->name('pdf');

Route::resource('selects', 'ProvinciaController');

Route::get('datospersona/localidad/{id}', 'DatosPersonaController@getLocalidades');

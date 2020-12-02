<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.mi-tema');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario', function () {
    return view('User.user');
});

Route::get('/practicas', function () {
    return view('Practicas.practicas');
});
Route::get('libros', 'InvestigacionController@libros')->name('libros.listado'); 
Route::get('imagenes', 'InvestigacionController@imagenes')->name('imagenes.listado');
Route::get('/libro_descarga/{libro}', 'InvestigacionController@descargas')->name('libro.descarga');

Route::post('user', 'UserController@update_avatar');
Route::post('imagen', 'InvestigacionController@update_imagen');
Route::post('resonancia', 'SecuenciaController@prediccion');
Route::post('validacion', 'CasoController@validar_respuesta'); 

Route::resource('secuencia', 'SecuenciaController');

Route::resource('investigacion', 'InvestigacionController');

Route::resource('caso', 'CasoController');
Route::get('respuesta/{caso}', 'CasoController@store')->name('caso.respuesta');

Route::get('buscar', 'InvestigacionController@busqueda');
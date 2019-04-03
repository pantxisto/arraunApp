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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//---------------------------------DOCUMENTOS-----------------------------------
Route::get('/documentos', "documentosController@Documentos")->name('documentos');


//---------------------------MENÚ DOCUMENTOS------------------------------------
Route::get('/mesociclos', "mesociclosController@Mesociclos")->name('mesociclos');
Route::get('/entrenamientos', "entrenamientosController@Entrenamientos")->name('entrenamientos');
Route::get('/datospersonales', "datosPersonalesController@DatosPersonales")->name('datosPersonales');
Route::get('/alineacion', "alineacionController@Alineacion")->name('alineacion');

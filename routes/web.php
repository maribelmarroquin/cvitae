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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::resource('/', 'IndexController');
Route::resource('/', 'InicioController');



/*Administración de datos del curriculum*/
Route::resource('principal', 'CVController');

/*Sesión de administración de datos*/
Route::resource('login', 'SessionController');
Route::get('logout', 'SessionController@logout');

/*ruta de curriculum por nombre, pedir que no exista el usuario a registrar*/
/*Route::resource('/{name}','DataController');*/
Route::resource('construccion', 'ConstruccionController');
Route::resource('datPer', 'DatosPerController');
Route::resource('formAca', 'FormAcaController');
Route::resource('formExAca', 'FormExAcaController');
Route::resource('idioInfo', 'IdioInfoController');
Route::resource('expProf', 'ExpProfController');
Route::resource('otros', 'OtrosController');
Route::resource('objetivo', 'ObjProfController');
Route::resource('pdfUno', 'PDFUnoController');
Route::resource('loginConsulta', 'LoginConsultaController', ['only'=> 'index']);
Route::resource('consultacv', 'VistaCVController');
Route::resource('consulta', 'ConsultaCVController');
Route::resource('logoutCons', 'ConsultaCVController@logout');
Route::resource('emailcv', 'EmailCVController');
Route::get('error', function(){
	abort(404);
});
/*  */
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
Route::resource('/', 'InicioController')->only(['index', 'store']);



/*Administración de datos del curriculum*/
Route::resource('principal', 'CVController')->only(['index', 'store', 'update', 'destroy']);

/*Sesión de administración de datos*/
Route::resource('login', 'SessionController')->only(['index', 'store']);
Route::get('logout', 'SessionController@logout');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


/*ruta de curriculum por nombre, pedir que no exista el usuario a registrar*/
/*Route::resource('/{name}','DataController');*/
/*Route::resource('construccion', 'ConstruccionController')->only(['index', 'store', 'update', 'destroy']);*/
Route::resource('datPer', 'DatosPerController')->only(['store', 'update']);

Route::resource('formAca', 'FormAcaController')->only(['edit', 'store', 'update', 'destroy']);
Route::get('formAca/subir/{id}', 'FormAcaController@subir');
Route::get('formAca/bajar/{id}', 'FormAcaController@bajar');

Route::resource('formExAca', 'FormExAcaController')->only(['store', 'edit', 'update', 'destroy']);

Route::resource('idioInfo', 'IdioInfoController')->only(['store', 'update', 'destroy']);
Route::post('idioInfo/clasificacion', 'IdioInfoController@storeClas')->name('idioInfo.storeClas');
Route::delete('idioInfo/clasificacion/{id}', 'IdioInfoController@destroyClas')->name('idioInfo.destroyClas');

Route::resource('expProf', 'ExpProfController')->only(['store', 'update', 'destroy']);
Route::get('expProf/subir/{id}', 'ExpProfController@subir');
Route::get('expProf/bajar/{id}', 'ExpProfController@bajar');

Route::resource('otros', 'OtrosController')->only(['store', 'edit', 'update', 'destroy']);
Route::resource('objetivo', 'ObjProfController')->only(['store', 'update', 'destroy']);

Route::post('pdf_cv/pdf', 'PDFUnoController@pdf')->name('pdf_cv.pdf');
Route::post('pdf_cv/pdfpass', 'PDFUnoController@store')->name('pdf_cv.store');

Route::resource('vista', 'DesignViewStayController')->only(['store', 'update']);

Route::resource('loginConsulta', 'LoginConsultaController', ['only'=> 'index']);
Route::resource('consultacv', 'VistaCVController')->only(['index']);
Route::resource('consulta', 'ConsultaCVController')->only(['index', 'store', 'destroy']);
Route::get('logoutCons', 'ConsultaCVController@logout');
Route::resource('emailcv', 'EmailCVController')->only(['index', 'store']);
Route::get('error', function(){
	abort(404);
});


/*  */
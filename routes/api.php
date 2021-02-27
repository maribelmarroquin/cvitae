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

/*
Route::middleware('auth:api')->get('/v1/cvitae/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('/v1/cvitae')->group(function () {
    Route::namespace('api')->group(function () {
	    Route::post('login', 'UsersController@login');
		Route::post('register', 'UsersController@register');

		Route::group(['middleware'=>'auth:api'], function(){
		    Route::post('logout', 'UsersController@logout');
		    Route::post('logoutall', 'UsersController@logoutAll');

		    Route::prefix('resumen')->group(function () {
    			Route::post('register', 'ApiResumenController@register');
			    Route::post('getter', 'ApiResumenController@getter');
			    Route::post('updater', 'ApiResumenController@updater');
			    Route::post('destroyer', 'ApiResumenController@destroyer');
			});

			Route::prefix('datos_personales')->group(function () {
    			Route::post('register', 'ApiDatosPersonalesController@register');
			    Route::post('getter', 'ApiDatosPersonalesController@getter');
			    Route::post('updater', 'ApiDatosPersonalesController@updater');
			    /*Route::post('destroyer', 'ApiDatosPersonalesController@destroyer');*/
			});

			Route::prefix('formacion_academica')->group(function(){
				Route::post('register', 'ApiFormacionAcademicaController@register');
			});
		    
		});
	});
});

/*

Route::namespace('api')->group(function () {
    Route::post('/login', 'UsersController@login');
	Route::post('/v1/cvitae/register', 'UsersController@register');

	Route::group(['middleware'=>'auth:api'], function(){
	    Route::post('/v1/cvitae/logout', 'UsersController@logout');
	    Route::post('/v1/cvitae/logoutall', 'UsersController@logoutAll');

	    Route::post('/v1/cvitae/resumen/register', 'ApiResumenController@register');
	    Route::post('/v1/cvitae/resumen/getter', 'ApiResumenController@getter');
	    Route::post('/v1/cvitae/resumen/updater', 'ApiResumenController@updater');
	    Route::post('/v1/cvitae/resumen/destroyer', 'ApiResumenController@destroyer');
	});
});
*/
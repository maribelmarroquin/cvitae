<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
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

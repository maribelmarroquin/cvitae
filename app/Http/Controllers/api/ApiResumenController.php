<?php

namespace App\Http\Controllers\api;

use App\Http\Requests\ResumenRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiResumenController extends Controller
{
    /**
    *
    * Método de Registro de Resumen
    *
    */
    public function register(ResumenRequest $request)
    {

        $user = auth()->user();

        \App\Resumen::create([
            'titulo' => $request['titulo'],
            'resumen' => $request['resumen'],
            'principal' => ($request['principal'] === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_re'=> $user['id'],
            ]);

        return response()->json([
		        'success' => true,
		        'message' => 'Resumen registrado correctamente'
        ]);

    }

    /**
    *
    * Método de recuperación de Resumen
    *
    */
    public function getter(Request $request){

    	$resultsForPage = $request['cantidad_resultados'];

    	$user = auth()->user();

    	$resumen = \App\Resumen::titulo($request['titulo'])
    					->resumen($request['resumen'])
    					->principal($request['principal'])
    					->principalVista($request['principal_vista'])
    					->where('fk_user_re', '=', $user['id'] )
    					->paginate($resultsForPage);

    	/*echo collect($resumen->first());*/

    	if(is_null($resumen->first())){
    		return response()->json([
	          'success' => false,
	          'message' => 'No se encontraron registros.',
	        ], 401);
    	}

    	return $resumen;
    }

    /**
    *
    * Método de Actualización de Resumen
    *
    */
    public function updater(ResumenRequest $request){

      $validator = Validator::make($request->all(), [
        'id_resumen' => 'required',
      ]);

      if ($validator->fails()) {
        return response()->json([
          'success' => false,
          'message' => $validator->errors(),
        ], 401);
      }

      $user = auth()->user();
    	$id_resumen = $request['id_resumen'];

		
		$act_resumen = \App\Resumen::where('id_resumen', $id_resumen)->where('fk_user_re', $user['id'])->first();

		if(is_null($act_resumen)){
      		return response()->json([
	          'success' => false,
	          'message' => $act_resumen,
	          'description' => 'Registro no actualizado.',
	        ], 401);
      	}
        
        $act_resumen->update([
        	'titulo' => $request->titulo,
        	'resumen' => $request->resumen,
        	'principal' => ($request['principal'] === 'yes') ? "OK":"-",
        	'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-"
        ]);

        return response()->json([
	        'success' => true,
	        'message' => 'Resumen actualizado correctamente'
    	]);

    }

    /**
    *
    * Método de Eliminación de Resumen
    *
    */
    public function destroyer(Request $request){

    	$validator = Validator::make($request->all(), [
    		'id_resumen' => 'required',
      	]);

      	if ($validator->fails()) {
	        return response()->json([
	          'success' => false,
	          'message' => $validator->errors(),
	        ], 401);
      	}
      	$user = auth()->user();
      	$destroyer = \App\Resumen::where('id_resumen', '=',$request['id_resumen'])->where('fk_user_re', '=', $user['id'] )->delete();

      	if(!$destroyer){
      		return response()->json([
	          'success' => false,
	          'message' => $destroyer,
	          'description' => 'Registro no eliminado.',
	        ], 401);
      	}

      	return response()->json([
	        'success' => true,
	        'message' => 'Resumen eliminado'
    	]);

    }
}

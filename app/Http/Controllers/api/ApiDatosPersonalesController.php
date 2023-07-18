<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DatosPerRequest;
use Illuminate\Support\Facades\Validator;

class ApiDatosPersonalesController extends Controller
{
    public function register(DatosPerRequest $request)
    {
    	$user = auth()->user();
    	$datos_personales = \App\Models\DatosPer::where('fk_user_dp', '=', $user['id'])->first();

    	if(!is_null($datos_personales)){
    		return response()->json([
	          'success' => false,
	          'message' => 'Ya existe un registro de datos personales.',
	        ], 401);
    	}

        \App\Models\DatosPer::create([
            'ruta' => $request['ruta'],
            'nombre' => $request['nombre'],
            'profesion' => $request['profesion'],
            'fecha_nac' => $request['fecha_nac'],
            'lugar_nac' => $request['lugar_nac'],
            'edo_civil' => $request['edo_civil'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'email_u' => $request['email_u'],
            'sitio' => $request['sitio'],
            'fk_user_dp'=>$user['id'],
            ]);

        return response()->json([
		        'success' => true,
		        'message' => 'Resumen registrado correctamente',
        ]);

    }

    public function getter(){

    	$user = auth()->user();

    	$datos_personales = \App\Models\DatosPer::where('fk_user_dp', '=', $user['id'])->first();

    	if(is_null($datos_personales)){
    		return response()->json([
	          'success' => false,
	          'message' => 'No se encontraron registros.',
	        ], 401);
    	}

    	$rutaImg = \Storage::disk('public')->get("$user->name/id/$datos_personales->ruta");
    	$datos_personales['imagen'] = base64_encode($rutaImg);

    	return $datos_personales;
        

    }

    public function updater(DatosPerRequest $request){

    	$validator = Validator::make($request->all(), [
        	'id_datos_per' => 'required',
      	]);

      	if ($validator->fails()) {
	        return response()->json([
	          'success' => false,
	          'message' => $validator->errors(),
	        ], 401);
      	}

      	$user = auth()->user();
    	$id_datos_per = $request['id_datos_per'];

		
		$act_datPer = \App\Models\DatosPer::where('id_datos_per', $id_datos_per)->where('fk_user_dp', $user['id'])->first();

		if(is_null($act_datPer)){
      		return response()->json([
	          'success' => false,
	          'message' => $act_datPer,
	          'description' => 'Datos Personales no actualizados. Registro inexistente.',
	        ], 401);
      	}

        $act_datPer->update([
        	'ruta' => $request->ruta,
	        'nombre' => $request->nombre,
	        'profesion' => $request->profesion,
	        'fecha_nac' => $request->fecha_nac,
	        'lugar_nac' => $request->lugar_nac,
	        'edo_civil' => $request->edo_civil,
	        'direccion' => $request->direccion,
	        'telefono' => $request->telefono,
	        'email_u' => $request->email_u,
	        'sitio' => $request->sitio
        ]);

        return response()->json([
	        'success' => true,
	        'message' => 'Datos Personales actualizados correctamente. '
    	]);

    }
    
}

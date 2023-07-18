<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Str;
use Mail;

class UsersController extends Controller
{

    public function login(Request $request)
    {

      	$validator = Validator::make($request->all(), [
	        'email' => 'required|email',
	        'password' => 'required',
      	]);
    
      	if ($validator->fails()) {
	        return response()->json([
	          'success' => false,
	          'message' => $validator->errors(),
	        ], 401);
      	}

      	$user = \App\Models\User::where('email', $request->email)->first();
	      
      	if (!is_null($user) && Hash::check($request->password, $user->password) && $user->confirmed == 1) {
        
	        $token = $user->createToken('api_cvitae')->accessToken;

	        return response()->json([
		        'success' => true,
		        'token' => $token,
		        'message' => 'Welcome to system',
		        'user' => $user
	        ]);

      	} else if($user->confirmed == 0){

	        return response()->json([
	          	'success' => false,
	          	'message' => 'Confirme su cuenta de correo.',
	        ], 401);

      	}
      	else{

	      	//if authentication is unsuccessfull, notice how I return json parameters
	        return response()->json([
	          	'success' => false,
	          	'message' => 'Email o contraseña inválidos.',
	        ], 401);

      	}

    }


    /**
     * Register api.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
       
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
          	return response()->json([
            	'success' => false,
            	'message' => $validator->errors(),
          	], 401);
        }

        $request['confirmation_code'] = Str::random(25);

        $user = \App\Models\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'confirmation_code' => $request['confirmation_code'],
        ]);
        
        $request['usuario'] = $request['name'];

        Mail::send('emails.confirmation_code', $request->all(), function($message) use ($request) {
            $message->to($request['email'],  $request['usuario'])->subject('Por favor, confirme su correo.');
        });

        /**
         * Registro de diseños
         */
        $this->regDisenos($request['email']);

                    
        /**
         * Creación de directorios
         */
        $directory_user = $request->usuario;
        $directory_id = "$request->usuario/id";
        $directory_docs = "$request->usuario/docs";

        \Storage::makeDirectory($directory_user);
        \Storage::makeDirectory($directory_id);
        \Storage::makeDirectory($directory_docs);

        
        /*$success['token'] = $user->createToken('appToken')->accessToken;*/
        return response()->json([
          	'success' => true,
          	'message' => 'Usuario registrado correctamente. Hemos enviado un mensaje a su cuenta de correo para su confirmación.',
          	'user' => $user
      	]);
      
    }

    /**
     * Registro de diseños en la base de datos.
     */
    private function regDisenos($email){
        
        $id_user = \DB::table('users')
            ->select('id')
            ->where('email', '=', $email)
            ->get();
        
        foreach ($id_user as $id) {
            $id_u = $id->id;
        }

        \App\Models\UserDesignsPDF::create([
            'fk_design_pdf' => '1',
            'fk_user_pdf' => $id_u,
            'vigencia_ini_pdf' => \Carbon\Carbon::now(),
            'vigencia_fin_pdf' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\Models\UserDesignsPDF::create([
            'fk_design_pdf' => '2',
            'fk_user_pdf' => $id_u,
            'vigencia_ini_pdf' => \Carbon\Carbon::now(),
            'vigencia_fin_pdf' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\Models\UserDesignsView::create([
            'design_view' => '1',
            'fk_user_design_view' => $id_u, 
            'vigencia_ini_view' => \Carbon\Carbon::now(),
            'vigencia_fin_view' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\Models\UserDesignsView::create([
            'design_view' => '2',
            'fk_user_design_view' => $id_u,
            'vigencia_ini_view' => \Carbon\Carbon::now(),
            'vigencia_fin_view' => \Carbon\Carbon::now()->addYears(10),
        ]);

        /**
         * Diseño de vista que permanece.
         */
        \App\Models\DesignViewStay::create([
            'view_stay' => 'EleganceView',
            'fk_user_view' => $id_u,
        ]);
    }


  	public function logout(){
    
    	$user = auth()->user();
    
    	$user->token()->delete();

    	$user->save();
    
      	return response()->json([
        	'success' => true,
        	'message' => 'Logout successfully'
      	]);
  
  	}

  	public function logoutAll(){
    
	    $user = auth()->user();

	    $user->tokens()->each(function($token, $key){
	      	$token->delete();
	    });
	    
	    $user->save();
	    
	    return response()->json([
	        'success' => true,
	        'message' => 'Se han cerrado las sesiones en todos los dispositivos correctamente.'
	    ]);
  
  	}
}

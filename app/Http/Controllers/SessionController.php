<?php

namespace App\Http\Controllers;

/*use Auth;*/
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\LoginRequest;*/
use Illuminate\Http\Request;
use Redirect;
use Session;

class SessionController extends Controller {

	public function index()
    {
        if(empty(Auth::user()->id)){
			Session::flash('message-error', 'Acceso denegado, requiere autenticarse.');
			return redirect::to('/');
            /*return view('/');*/
        }else{
            return redirect::to('principal');
        }
	}
	
	public function store(Request $request) {

		$rules = [
            'email' => 'email|required|max:255',
            'password' => 'required'
        ];
        
		$this->validate($request, $rules);

		if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password'], 'confirmed' => 1])) {
			return Redirect::to('principal');
		}

		Session::flash('message-error', 'Acceso denegado. Valide lo siguiente: que sus credenciales de acceso sean correctas, de no se así, puede realizar el restablecimiento de su contraseña en "Olvidé mi contraseña"; que se haya realizado la verificación de su correo electrónico. Una vez Realizado lo anterior, intente nuevamente.');
		return Redirect::to('/');

	}

	public function logout() {
		/*Auth::logout('web');*/
		Auth::guard('web')->logout();
		return Redirect::to('/');
	}
}
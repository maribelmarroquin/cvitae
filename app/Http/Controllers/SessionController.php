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
		/*if (Auth::attempt('users', ['email' => $request['email'], 'password' => $request['password']])) {
			return Redirect::to('principal');
		}*/
		if (Auth::guard('web')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
			return Redirect::to('principal');
		}

		Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
		return Redirect::to('/');

	}

	public function logout() {
		Auth::logout('web');
		return Redirect::to('/');
	}
}
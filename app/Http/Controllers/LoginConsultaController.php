<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\LoginRequest;*/
use Redirect;
use Session;
use Auth;

class LoginConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if(empty(Auth::user()->id)){*/
        if(empty(Auth::guard('consulta_cv')->user()->id_consulta)){
            
            return view('inicio_rec');
        }else{
            return redirect::to('consultacv');
        }
    }
}

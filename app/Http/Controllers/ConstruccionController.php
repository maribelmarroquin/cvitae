<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\LoginRequest;*/
use Redirect;
use Auth;

class ConstruccionController extends Controller
{

    public function index()
    {
        if(empty(Auth::user()->id)){
            return redirect::to('/principal');
        }else{
        	return view('errors.construccion');
            
        }
    }
}
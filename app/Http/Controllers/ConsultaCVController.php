<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
/*use App\Http\Requests\LoginRequest;*/
use Redirect;
use Session;
use Auth;
use Cookie;

class ConsultaCVController extends Controller
{

    public function index()
    {
        if(empty(Auth::user()->id)){
            return view('errors.401');
        }else{
            return redirect::to('/consultacv');
        }
    }


       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        /*if (Auth::attempt('consulta_c_vs', ['fk_usuario' => $fk_usuario, 'password' => $request['password']])) {*/
        /*if (Auth::attempt('consulta_cv', ['user_cons'=> $request['user_cons'], 'password' => $request['password']])){*/
        if (Auth::guard('consulta_cv')->attempt(['user_cons'=> $request['user_cons'], 'password' => $request['password']])){
            
            $id_consulta = Auth::user('consulta_cv')->id_consulta;
            $contador = \DB::table('consulta_cv')
            ->select('id_consulta','cont')
            ->where('user_cons', '=', $request['user_cons'] )
            ->get();

            foreach ($contador as $cont) {
                $c = $cont->cont;
                $id_consulta = $cont->id_consulta;
            }

            $conteoActual = $c + 1;

            if($conteoActual <= 4 ){

                $consulta = \CV\ConsultaCV::find($id_consulta);
                $consulta->cont = $conteoActual;
                $consulta->save();

                Session::flash('message-correct', 'Ha utilizado su inicio de sesión número '.$conteoActual.' de 4 veces permitidas.');
                return Redirect::to('/consultacv');
            }else{
                Auth::logout('consulta_cv');
                \DB::table('consulta_cv')->where('id_consulta', '=', $id_consulta)->delete();
                return Redirect::to('/loginConsulta');
            }
        }
        else{
            Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
            return Redirect::to('/loginConsulta');
        }
    }

    public function logout() {
        Auth::logout('consulta_cv');
        return Redirect::to('/loginConsulta');
    }

}

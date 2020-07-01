<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
/*use App\Http\Requests\LoginRequest;*/
use Redirect;
use Session;
use URL;
/*use Auth;*/
/*use Cookie;*/

class ConsultaCVController extends Controller
{

    public function index()
    {
        if(empty(Auth::guard('consulta_cv')->user()->id_consulta)){
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

                $consulta = \App\ConsultaCV::find($id_consulta);
                $consulta->cont = $conteoActual;
                $consulta->save();

                Session::flash('message-correct', 'Ha utilizado su inicio de sesión número '.$conteoActual.' de 4 veces permitidas.');
                return Redirect::to('/consultacv');
            }else{
                Auth::guard('consulta_cv')->logout();
                \DB::table('consulta_cv')->where('id_consulta', '=', $id_consulta)->delete();
                Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
                return Redirect::to('/loginConsulta');
            }
        }
        else{
            Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
            return Redirect::to('/loginConsulta');
        }
    }

    public function logout() {
        /*
        Auth::logout('consulta_cv');
        return Redirect::to('/loginConsulta');
        */
        Auth::guard('consulta_cv')->logout();
        return Redirect::to('/loginConsulta');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\ConsultaCV::destroy($id);
        Session::flash('message-correct', 'Usuario de "consulta" eliminado correctamente.');
        $tabName = 'consulta';
        /*return redirect::to('principal/#consulta');*/
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

}

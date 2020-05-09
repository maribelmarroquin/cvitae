<?php

namespace App\Http\Controllers;

/*use CV\Http\Requests;*/
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;

class CVController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_user = Auth::user()->id;
        $name_user = Auth::user()->name;

        $resumen = \DB::table('resumens')
            ->select('*')
            ->where('fk_user_re', '=', $id_user )
            ->get();
        
        $datosP= \DB::table('datos_pers')
            ->select('*')
            ->where('fk_user_dp', '=', $id_user )
            ->get();

        $formAca= \DB::table('form_acas')
            ->select('*')
            ->where('fk_user_fa', '=', $id_user )
            ->get();

        $formExAca= \DB::table('form_ex_acas')
            ->select('*')
            ->where('fk_user_fe', '=', $id_user )
            ->get();

        $opciones = ['Curso'=>'Curso', 'Conferencias'=>'Conferencias', 'Taller'=>'Taller', 'Seminario'=>'Seminario'];

        $idioInfo= \DB::table('idio_infos')
            ->select('*')
            ->where('fk_user_ii', '=', $id_user )
            ->get();

        $expProf= \DB::table('exp_profs')
            ->select('*')
            ->where('fk_user_ep', '=', $id_user )
            ->get();

        $otros=\DB::table('otros')
            ->select('*')
            ->where('fk_user_o', '=', $id_user )
            ->get();

        $objProf=\DB::table('obj_profs')
            ->select('*')
            ->where('fk_user_op', '=', $id_user )
            ->get();

        $consulta=\DB::table('consulta_cv')
            ->select('user_cons', 'cont')
            ->where('fk_user_consulta', '=', $id_user )
            ->get();
        
        return view('cv')->with(['resumen' => $resumen, 'datosP'=>$datosP, 'formAca'=>$formAca, 'formExAca'=>$formExAca, 'opciones'=>$opciones, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros, 'objProf'=>$objProf, 'consulta'=>$consulta, 'name_user'=>$name_user]);
    }

    public function store(Request $request)
    {

       /* $this->validate($request, [
            'titulo' => 'required|max:50',
            'resumen' => 'required',
            'principal' => 'required|max:3'
        ]);*/

        $rules = [
            'titulo' => 'required|max:50',
            'resumen' => 'required',
            'principal' => 'max:3'
        ];
         
        $messages = [
            'titulo.required' => 'El campo Título es indispensable.',
            'titulo.max' =>'Has excedido la cantidad de caracteres (50) que soporta Título.',
            'resumen.required' => 'Dato resumen, requerido.',
            'principal.max' => 'El dato del campo principal, sólo puede contener tres caracteres o menos.'
        ];
         
        $this->validate($request, $rules, $messages);

        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\Resumen::create([
            'titulo' => $request['titulo'],
            'resumen' => $request['resumen'],
            'principal' => ($principal === 'yes') ? "'OK'":"-",
            'fk_user_re'=>$id,
            ]);

        Session::flash('message-correct', 'Resumen registrado correctamente');
        //return redirect::to('principal');
        
        $tabName = 'resumen';
        return Redirect::to('principal')->with($tabName, 'tabName');
    }

    public function show($id){
        $resumen= \DB::table('resumens')
            ->select('*')
            ->where(['id_resumen' => $id, 'fk_user_re' => Auth::user()->id])
            ->get();
        if(empty($resumen)){
            Session::flash('message-error', 'El registro no existe');
            return redirect::to('principal');
        }
        else{
            return view('contCV.edit_resumen')->with(['resumen'=>$resumen]);
        }
    }


    public function update($id_resumen, Request $request){
        
        $principal = $request['principal'];

            $act_resumen = \App\Resumen::find($id_resumen);
            $act_resumen->titulo = $request->titulo;
            $act_resumen->resumen = $request->resumen;
            $act_resumen->principal = ($principal === 'yes') ? "OK":"-";
            $act_resumen->save();

        Session::flash('message-correct', 'Resumen modificado correctamente');
        return "<script lenguaje=\"JavaScript\">window.opener.location.reload(); window.close();</script>";

    }

    public function destroy($id)
    {
        \App\Resumen::destroy($id);
        Session::flash('message-error', 'Resumen profesional eliminado correctamente.');
        return redirect::to('principal');
    }
}

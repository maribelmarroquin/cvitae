<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;

class VistaCVController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth:consulta_cv');
    }
    
    public function index()
    {
        //hacer una validación para identificar si el Usuario existe en la Base de datos en base a la contraseña del usuario.
        if(empty(Auth::user('consulta_cv')->id_consulta)){
            Session::flash('message-error', 'Acceso denegado. No ha iniciado sesión.');
            return redirect::to('/loginConsulta');
        }else{
        $fk_user = Auth::user('consulta_cv')->fk_user_consulta;

        $id1= \DB::table('users')
            ->select('id')
            ->where('id', '=', $fk_user)
            ->get();
        foreach ($id1 as $id) {
            $fk_id = $id->id;
        }
        if($fk_id==$fk_user){

            $resumen = \DB::table('resumens')
                ->select('titulo', 'resumen')
                ->where('fk_user_re', '=', $fk_user )
                ->get();
        
            $datosP= \DB::table('datos_pers')
                ->select('ruta', 'nombre', 'profesion', 'fecha_nac', 'lugar_nac', 'edo_civil', 'direccion', 'telefono', 'email_u', 'sitio')
                ->where('fk_user_dp', '=', $fk_user )
                ->get();

            $formAca= \DB::table('form_acas')
                ->select('nivel', 'especialidad', 'instituto', 'ano_ini', 'ano_fin', 'doc', 'ruta_doc')
                ->where('fk_user_fa', '=', $fk_user )
                ->get();

            $formExAca= \DB::table('form_ex_acas')
                ->select('curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex')
                ->where('fk_user_fe', '=', $fk_user )
                ->get();

            $idioInfo= \DB::table('idio_infos')
                ->select('idi_info', 'nivel')
                ->where('fk_user_ii', '=', $fk_user)
                ->get();

            $expProf= \DB::table('exp_profs')
                ->select('empresa', 'cargo', 'funciones', 'jefe', 'telefono', 'inicio_lab', 'fin_lab', 'motivos', 'logros')
                ->where('fk_user_ep', '=', $fk_user )
                ->get();

            $otros=\DB::table('otros')
                ->select('dato', 'des_dato', 'ruta_dato')
                ->where('fk_user_o', '=', $fk_user)
                ->get();

            $objProf=\DB::table('obj_profs')
                ->select('objetivo', 'des_obj')
                ->where('fk_user_op', '=', $fk_user )
                ->get();
            
            return view('vistacv_Uno')->with(['resumen' => $resumen, 'datosP'=>$datosP, 'formAca'=>$formAca, 'formExAca'=>$formExAca, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros, 'objProf'=>$objProf]);
            
            }
           
           //return view('vistacv')->with(['resumen' => $resumen]);
        }
        
    }
}

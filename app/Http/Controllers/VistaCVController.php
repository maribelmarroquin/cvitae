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

        $design_view = \DB::table('designview_stay')
            ->select('*')
            ->where('fk_user_view', '=', $fk_user )   
            ->get();

        foreach ( $design_view as $dv) {
            $view_stay = $dv->view_stay;
        }

        $design_css =  'css/vista/'.$view_stay.'.css'; 
        $design_js =  'js/vista/'.$view_stay.'.js';

        $id1= \DB::table('users')
            ->select('id')
            ->where('id', '=', $fk_user)
            ->get();
        foreach ($id1 as $id) {
            $fk_id = $id->id;
        }
        if($fk_id==$fk_user){

            $name_user1 = \DB::table('users')
            ->select('name')
            ->where('id', '=', $fk_user)
            ->get();
            
            foreach ($name_user1 as $nu) {
                $name_user = $nu->name;
            }

            $resumen = \DB::table('resumens')
                ->select('titulo', 'resumen')
                ->where('fk_user_re', '=', $fk_user )
                ->where('principal_vista', '=', 'OK' )
                ->get();
        
            $datosP= \DB::table('datos_pers')
                ->select('ruta', 'nombre', 'profesion', 'fecha_nac', 'lugar_nac', 'edo_civil', 'direccion', 'telefono', 'email_u', 'sitio')
                ->where('fk_user_dp', '=', $fk_user )
                ->get();

            $formAca= \DB::table('form_acas')
                ->select('order_fa', 'nivel', 'especialidad', 'instituto', 'ano_ini', 'ano_fin', 'doc', 'ruta_doc')
                ->where('fk_user_fa', '=', $fk_user )
                ->where('principal_vista', '=', 'OK' )
                ->orderByRaw('order_fa asc')
                ->get();

            $curso_fe= \DB::table('form_ex_acas')
                ->select('curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex')
                ->where('fk_user_fe', '=', $fk_user )
                ->where('curso', '=', 'Curso' )
                ->where('principal_vista', '=', 'OK' )
                ->get();
            
            $taller_fe=\DB::table('form_ex_acas')
            ->select('curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex')
            ->where('fk_user_fe', '=', $fk_user )
            ->where('curso', '=', 'Taller' )
            ->where('principal_vista', '=', 'OK' )
            ->get();

            $conferencias_fe=\DB::table('form_ex_acas')
            ->select('curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex')
            ->where('fk_user_fe', '=', $fk_user )
            ->where('curso', '=', 'Conferencias' )
            ->where('principal_vista', '=', 'OK' )
            ->get();

            $seminario_fe=\DB::table('form_ex_acas')
            ->select('curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex')
            ->where('fk_user_fe', '=', $fk_user )
            ->where('curso', '=', 'Seminario' )
            ->where('principal_vista', '=', 'OK' )
            ->get();

            
            $idioInfo = \DB::table('idio_infos')
                ->select('idio_infos.id_idinfo', 'idio_infos.idi_info', 'idio_infos.nivel', 'idio_infos.principal', 'idio_infos.principal_vista', 'idio_infos.fk_user_ii', 'clas_conocimientos.clasificacion')
                ->join('clas_conocimientos', 'clas_conocimientos.id_clas_conocimientos', '=', 'idio_infos.clasificacion')
                ->where('idio_infos.fk_user_ii', '=', $fk_user )
                ->where('principal_vista', '=', 'OK' )
                ->orderByRaw('idio_infos.clasificacion asc')
                ->get();

            /*dd($idioInfo);*/
            
            $clas_ii = \DB::table('clas_conocimientos')
                ->select('*')
                ->where('fk_user_clas_conocimientos', '=', $fk_user )  
                ->orderByRaw('id_clas_conocimientos asc') 
                ->get();

            $expProf= \DB::table('exp_profs')
                ->select('empresa', 'cargo', 'funciones', 'herramientas', 'jefe', 'telefono', 'inicio_lab', 'fin_lab', 'motivos', 'logros')
                ->where('fk_user_ep', '=', $fk_user )
                ->where('principal_vista', '=', 'OK' )
                ->orderByRaw('order_ep asc')
                ->get();

            $otros=\DB::table('otros')
                ->select('dato', 'des_dato', 'ruta_dato')
                ->where('fk_user_o', '=', $fk_user)
                ->where('principal_vista', '=', 'OK' )
                ->get();

            $objProf=\DB::table('obj_profs')
                ->select('objetivo', 'des_obj')
                ->where('fk_user_op', '=', $fk_user )
                ->where('principal_vista', '=', 'OK' )
                ->get();
            
            return view('vistacv_Uno')->with(['resumen' => $resumen, 'datosP'=>$datosP, 'formAca'=>$formAca, 'curso_fe'=>$curso_fe, 'taller_fe'=>$taller_fe, 'conferencias_fe'=>$conferencias_fe, 'seminario_fe'=>$seminario_fe, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros, 'objProf'=>$objProf, 'clas_ii'=>$clas_ii, 'name_user'=>$name_user, 'design_css'=>$design_css, 'design_js'=>$design_js]);
            
            }
           
           //return view('vistacv')->with(['resumen' => $resumen]);
        }
        
    }
}

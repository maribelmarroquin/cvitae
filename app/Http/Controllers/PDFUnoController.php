<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;
use PDF;

class PDFUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth:web');
    }

    public function index(){

        $id_user = Auth::user('users')->id;

        $resumen = \DB::table('resumens')
            ->select('*')
            ->where('fk_user_re', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();
        
        $datosP= \DB::table('datos_pers')
            ->select('*')
            ->where('fk_user_dp', '=', $id_user )
            ->get();

        $formAca= \DB::table('form_acas')
            ->select('*')
            ->where('fk_user_fa', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $formExAca= \DB::table('form_ex_acas')
            ->select('*')
            ->where('fk_user_fe', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $idioInfo= \DB::table('idio_infos')
            ->select('*')
            ->where('fk_user_ii', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $expProf= \DB::table('exp_profs')
            ->select('*')
            ->where('fk_user_ep', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $otros=\DB::table('otros')
            ->select('*')
            ->where('fk_user_o', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $pdf = PDF::loadView('contCV.pdfUnosp', ['resumen' => $resumen, 'datosP'=>$datosP, 'formAca'=>$formAca, 'formExAca'=>$formExAca, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros]);
        return $pdf->stream('cv.pdf');

    }

    public function generateRandomString($length) { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    } 

    public function store (Request $request){
        
        $pass = $request['pass'];

        if(empty($pass)){
            Session::flash('message-error', 'Para exportar PDF con datos de acceso a la plataforma, favor de registrar una contraseña.');
            return Redirect::to('/principal');
        }

        $userConsulta = $this->generateRandomString(5);
        $id_user = Auth::user('users')->id;
        
        $exUserCon = \DB::table('consulta_cv')
            ->select('user_cons')
            ->get();

        foreach ($exUserCon as $euc) {
            $userConsultaValidar = $euc->user_cons;

            if($userConsulta == $userConsultaValidar) { 
                $userConsulta = $this->generateRandomString(5);
            } 
        }
     

        \CV\ConsultaCV::create([
            'fk_user_consulta' => $id_user,
            'user_cons' => $userConsulta,
            'cont' => '0',
            'password' => bcrypt($pass),
        ]);

       

        $resumen = \DB::table('resumens')
            ->select('*')
            ->where('fk_user_re', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();
        
        $datosP= \DB::table('datos_pers')
            ->select('*')
            ->where('fk_user_dp', '=', $id_user )
            ->get();

        $formAca= \DB::table('form_acas')
            ->select('*')
            ->where('fk_user_fa', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $formExAca= \DB::table('form_ex_acas')
            ->select('*')
            ->where('fk_user_fe', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $idioInfo= \DB::table('idio_infos')
            ->select('*')
            ->where('fk_user_ii', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $expProf= \DB::table('exp_profs')
            ->select('*')
            ->where('fk_user_ep', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $otros=\DB::table('otros')
            ->select('*')
            ->where('fk_user_o', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        $objProf=\DB::table('obj_profs')
            ->select('*')
            ->where('fk_user_op', '=', $id_user )
            ->where('principal', '=', 'OK' )
            ->get();

        
        $pdf = PDF::loadView('contCV.pdfUnoPass', ['resumen' => $resumen, 'datosP'=>$datosP, 'passConsulta'=>$pass, 'userConsulta'=>$userConsulta,'formAca'=>$formAca, 'formExAca'=>$formExAca, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros, 'objProf'=>$objProf]);

        return $pdf->stream('cv.pdf');

        
            
      
        
    }
      

}

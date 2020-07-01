<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumenRequest;
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
            ->paginate(1, ['*'], 'page_res');
        
        $datosP= \DB::table('datos_pers')
            ->select('*')
            ->where('fk_user_dp', '=', $id_user )
            ->get();

        $formAca= \DB::table('form_acas')
            ->select('*')
            ->where('fk_user_fa', '=', $id_user )
            ->orderByRaw('order_fa asc')
            ->paginate(5, ['*'], 'page_fa');

        $formExAca= \DB::table('form_ex_acas')
            ->select('*')
            ->where('fk_user_fe', '=', $id_user )
            ->paginate(5, ['*'], 'page_fexa');

        $opciones = ['Curso'=>'Curso', 'Conferencias'=>'Conferencias', 'Taller'=>'Taller', 'Seminario'=>'Seminario'];

        /*
        $idioInfo= \DB::table('idio_infos')
            ->select('*')
            ->where('fk_user_ii', '=', $id_user )
            ->paginate(10, ['*'], 'page_ii');
        */

        $idioInfo = \DB::table('idio_infos')
            ->select('idio_infos.id_idinfo', 'idio_infos.idi_info', 'idio_infos.nivel', 'idio_infos.principal', 'idio_infos.principal_vista', 'idio_infos.fk_user_ii', 'clas_conocimientos.clasificacion')
            ->join('clas_conocimientos', 'clas_conocimientos.id_clas_conocimientos', '=', 'idio_infos.clasificacion')
            ->where('idio_infos.fk_user_ii', '=', $id_user )
            ->orderByRaw('clasificacion asc')
            ->paginate(10, ['*'], 'page_ii');

        $expProf= \DB::table('exp_profs')
            ->select('*')
            ->where('fk_user_ep', '=', $id_user )
            ->orderByRaw('order_ep asc')
            ->paginate(5, ['*'], 'page_exp');

        $otros=\DB::table('otros')
            ->select('*')
            ->where('fk_user_o', '=', $id_user )
            ->paginate(5, ['*'], 'page_otros');

        $objProf=\DB::table('obj_profs')
            ->select('*')
            ->where('fk_user_op', '=', $id_user )
            ->get();

        $consulta=\DB::table('consulta_cv')
            ->select('*')
            ->where('fk_user_consulta', '=', $id_user )   
            ->paginate(10, ['*'], 'page_con');
            /*->get();*/

        $designs = \DB::table('user_designs_pdf')
            ->select('user_designs_pdf.fk_user_pdf' ,'catdesigns_pdf.design_pdf')
            ->join('catdesigns_pdf', 'catdesigns_pdf.id_designs_pdf', '=', 'user_designs_pdf.fk_design_pdf')
            ->where('user_designs_pdf.fk_user_pdf', '=', $id_user )
            ->get();

        $designs_view = \DB::table('user_designs_view')
            ->select('user_designs_view.fk_user_design_view' ,'catdesigns_view.design_view')
            ->join('catdesigns_view', 'catdesigns_view.id_designs_view', '=', 'user_designs_view.design_view')
            ->where('user_designs_view.fk_user_design_view', '=', $id_user )
            ->get();

        $view_stay = \DB::table('designview_stay')
        ->select('*')
        ->where('fk_user_view', '=', $id_user )   
        ->get();

        $clas_ii = \DB::table('clas_conocimientos')
            ->select('*')
            ->where('fk_user_clas_conocimientos', '=', $id_user )   
            ->get();
        
       /* echo $designs;*/

        return view('cv')->with(['resumen' => $resumen, 'datosP'=>$datosP, 'formAca'=>$formAca, 'formExAca'=>$formExAca, 'opciones'=>$opciones, 'idioInfo'=>$idioInfo, 'expProf'=>$expProf, 'otros'=>$otros, 'objProf'=>$objProf, 'consulta'=>$consulta, 'designs'=>$designs, 'designs_view'=>$designs_view, 'view_stay'=>$view_stay, 'clas_ii'=>$clas_ii, 'name_user'=>$name_user]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumenRequest $request)
    {

        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\Resumen::create([
            'titulo' => $request['titulo'],
            'resumen' => $request['resumen'],
            'principal' => ($request['principal'] === 'yes') ? "'OK'":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "'OK'":"-",
            'fk_user_re'=>$id,
            ]);

        Session::flash('message-correct', 'Resumen registrado correctamente');
        //return redirect::to('principal');
        
        $tabName = 'resumen';
        return Redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id_resumen, ResumenRequest $request){
        $tabName = 'resumen';
        
        $principal = $request['principal'];

            $act_resumen = \App\Resumen::find($id_resumen);
            $act_resumen->titulo = $request->titulo;
            $act_resumen->resumen = $request->resumen;
            $act_resumen->principal = ($request['principal'] === 'yes') ? "OK":"-";
            $act_resumen->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
            $act_resumen->save();

        Session::flash('message-correct', 'Resumen modificado correctamente');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);

    }

    public function destroy($id)
    {
        $tabName = 'resumen';
        \App\Resumen::destroy($id);
        Session::flash('message-error', 'Resumen profesional eliminado correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

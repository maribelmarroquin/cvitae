<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpProfRequest;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use Redirect;

class ExpProfController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpProfRequest $request)
    {
        $tabName = 'exp_prof';
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        $expProf_order= \DB::table('exp_profs')
            ->select('order_ep')
            ->where('fk_user_ep', '=', $id )
            ->orderByRaw('order_ep desc')
            ->limit(1)
            ->get();
        
        foreach ($expProf_order as $ep_o) {
            $last_order = $ep_o->order_ep;
        }

        if(empty($last_order)){
            $last_order = 1;
        }
        else{
            $last_order = $last_order+1;
        }

        \App\Models\ExpProf::create([
            'empresa' => $request['empresa'],
            'cargo' => $request['cargo'],
            'funciones' => $request['funciones'],
            'herramientas' => $request['herramientas'],
            'jefe' => $request['jefe'],
            'telefono' => $request['telefono'],
            'inicio_lab' => $request['inicio_lab'],
            'fin_lab' => $request['fin_lab'],
            'status_fin'=> $request['status_fin'],
            'motivos' => $request['motivos'],
            'logros' => $request['logros'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_ep' => $id,
            'order_ep' => $last_order
            ]);

        Session::flash('message-correct', 'Experiencia laboral registrada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpProfRequest $request, $id)
    {
        $tabName = 'exp_prof';
        $principal = $request['principal'];
        
        $act_expProf = \App\Models\ExpProf::find($id);
        $act_expProf->empresa = $request->empresa;
        $act_expProf->cargo = $request->cargo;
        $act_expProf->funciones = $request->funciones;
        $act_expProf->herramientas = $request->herramientas;
        $act_expProf->jefe = $request->jefe;
        $act_expProf->telefono = $request->telefono;
        $act_expProf->inicio_lab = $request->inicio_lab;
        $act_expProf->fin_lab = $request->fin_lab;
        $act_expProf->status_fin = $request->status_fin;
        $act_expProf->motivos = $request->motivos;
        $act_expProf->logros = $request->logros;
        $act_expProf->principal = ($principal === 'yes') ? "OK":"-";
        $act_expProf->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
        $act_expProf->save();

        Session::flash('message-correct', 'Experiencia Profesional modificada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabName = 'exp_prof';
        \App\Models\ExpProf::destroy($id);
        Session::flash('message-error', 'Experiencia Profesional eliminada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /* ----------------------------------------------------------------------------------------------------------------- */
    public function subir($id){

        $tabName='exp_prof';

        $id_user = Auth::user('users')->id;

        $order_ep= \DB::table('exp_profs')
            ->select('order_ep')
            ->where('id_exprof', '=', $id )
            ->get();

        foreach ($order_ep as $o_ep) {
            $order_expProf = $o_ep->order_ep;
        }

        $expProf_change= \DB::table('exp_profs')
            ->select('id_exprof', 'order_ep')
            ->where('fk_user_ep', '=', $id_user )
            ->where('order_ep', '<', $order_expProf )
            ->orderByRaw('order_ep desc')
            ->limit(1)
            ->get();

        if(count($expProf_change)==0){
            Session::flash('message-error', '¡No existen datos por arriba del seleccionado!');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
        }

        foreach ($expProf_change as $ep_c) {
            $order_menor = $ep_c->order_ep;
            $id_menor = $ep_c->id_exprof;
        }

        \DB::table('exp_profs')
            ->where('id_exprof', $id_menor)
            ->update(['order_ep' => $order_expProf]);

        \DB::table('exp_profs')
            ->where('id_exprof', $id)
            ->update(['order_ep' => $order_menor]);
        
        
        Session::flash('message-correct', 'Experiencia profesional reordenada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

     /* ----------------------------------------------------------------------------------------------------------------- */
    public function bajar($id){
        $tabName='exp_prof';

        $id_user = Auth::user('users')->id;

        $order_ep= \DB::table('exp_profs')
            ->select('order_ep')
            ->where('id_exprof', '=', $id )
            ->get();

        foreach ($order_ep as $o_ep) {
            $order_expProf = $o_ep->order_ep;
        }

        $expProf_change= \DB::table('exp_profs')
            ->select('id_exprof', 'order_ep')
            ->where('fk_user_ep', '=', $id_user )
            ->where('order_ep', '>', $order_expProf )
            ->orderByRaw('order_ep asc')
            ->limit(1)
            ->get();

        if(count($expProf_change)==0){
            Session::flash('message-error', '¡No existen datos por debajo del seleccionado!');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
        }

        foreach ($expProf_change as $ep_c) {
            $order_mayor = $ep_c->order_ep;
            $id_mayor = $ep_c->id_exprof;
        }

        \DB::table('exp_profs')
            ->where('id_exprof', $id_mayor)
            ->update(['order_ep' => $order_expProf]);

        \DB::table('exp_profs')
            ->where('id_exprof', $id)
            ->update(['order_ep' => $order_mayor]);
        
        
        Session::flash('message-correct', 'Experiencia profesional reordenada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

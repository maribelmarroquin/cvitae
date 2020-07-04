<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAcaRequest;
/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;

class FormAcaController extends Controller
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
    public function store(FormAcaRequest $request)
    {
        $tabName = 'form_aca';
        $id = Auth::user('users')->id;

        $formAca_order= \DB::table('form_acas')
            ->select('order_fa')
            ->where('fk_user_fa', '=', $id )
            ->orderByRaw('order_fa desc')
            ->limit(1)
            ->get();
        
        foreach ($formAca_order as $fa_o) {
            $last_order = $fa_o->order_fa;
        }

        if(empty($last_order)){
            $last_order = 1;
        }
        else{
            $last_order = $last_order+1;
        }
        

        \App\FormAca::create([
            'nivel' => $request['nivel'],
            'especialidad' => $request['especialidad'],
            'instituto' => $request['instituto'],
            'ano_ini' => $request['ano_ini'],
            'ano_fin' => $request['ano_fin'],
            'status' => $request['status'],
            'doc' => $request['doc'],
            'ruta_doc' => $request['ruta_doc'],
            'principal' => ($request['principal'] === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_fa' => $id,
            'order_fa' => $last_order
        ]);

        Session::flash('message-correct', 'Datos Académicos registrados correctamente');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabName = 'form_aca';
        $nameUser = Auth::user('users')->name;

        $formAca= \DB::table('form_acas')
            ->select('ruta_doc', 'nivel')
            ->where('id_form_aca', '=', $id )
            ->get();
        
        foreach ($formAca as $fa) {
            $ruta_doc = $fa->ruta_doc;
            $nivel = $fa->nivel;
        }

        \DB::table('form_acas')
              ->where('id_form_aca', $id)
              ->update(['ruta_doc' => null]);

        \Storage::disk('public')->delete($nameUser.'/docs/'.$ruta_doc);
        
        Session::flash('message-correct', 'Foto de formación académica "'.$nivel.'" eliminada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormAcaRequest $request, $id)
    {
        $tabName='form_aca';
        $act_formAca = \App\FormAca::find($id);
        $act_formAca->nivel = $request->nivel;
        $act_formAca->especialidad = $request->especialidad;
        $act_formAca->instituto = $request->instituto;
        $act_formAca->ano_ini = $request->ano_ini;
        $act_formAca->ano_fin = $request->ano_fin;
        $act_formAca->status = $request->status;
        $act_formAca->doc = $request->doc;
        $act_formAca->ruta_doc = $request->ruta_doc;
        $act_formAca->principal = ($request['principal'] === 'yes') ? "OK":"-";
        $act_formAca->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
        $act_formAca->save();

        Session::flash('message-correct', 'Datos Académicos modificados correctamente');
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
        $tabName = 'form_aca';
        \App\FormAca::destroy($id);
        Session::flash('message-error', 'Datos Académicos eliminados.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    public function subir($id){

        $tabName='form_aca';

        $id_user = Auth::user('users')->id;

        $order_fa= \DB::table('form_acas')
            ->select('order_fa')
            ->where('id_form_aca', '=', $id )
            ->get();

        foreach ($order_fa as $o_fa) {
            $order_formAc = $o_fa->order_fa;
        }

        $formAca_change= \DB::table('form_acas')
            ->select('id_form_aca', 'order_fa')
            ->where('fk_user_fa', '=', $id_user )
            ->where('order_fa', '<', $order_formAc )
            ->orderByRaw('order_fa desc')
            ->limit(1)
            ->get();

        if(count($formAca_change)==0){
            Session::flash('message-error', '¡No existen datos por arriba del seleccionado!');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
        }

        foreach ($formAca_change as $fa_c) {
            $order_menor = $fa_c->order_fa;
            $id_menor = $fa_c->id_form_aca;
        }

        \DB::table('form_acas')
            ->where('id_form_aca', $id_menor)
            ->update(['order_fa' => $order_formAc]);

        \DB::table('form_acas')
            ->where('id_form_aca', $id)
            ->update(['order_fa' => $order_menor]);
        
        
        Session::flash('message-correct', 'Datos Académicos reordenados correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    public function bajar($id){
        $tabName='form_aca';

        $id_user = Auth::user('users')->id;

        $order_fa= \DB::table('form_acas')
            ->select('order_fa')
            ->where('id_form_aca', '=', $id )
            ->get();

        foreach ($order_fa as $o_fa) {
            $order_formAc = $o_fa->order_fa;
        }

        $formAca_change= \DB::table('form_acas')
            ->select('id_form_aca', 'order_fa')
            ->where('fk_user_fa', '=', $id_user )
            ->where('order_fa', '>', $order_formAc )
            ->orderByRaw('order_fa asc')
            ->limit(1)
            ->get();

        if(count($formAca_change)==0){
            Session::flash('message-error', '¡No existen datos por debajo del seleccionado!');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
        }

        foreach ($formAca_change as $fa_c) {
            $order_mayor = $fa_c->order_fa;
            $id_mayor = $fa_c->id_form_aca;
        }

        \DB::table('form_acas')
            ->where('id_form_aca', $id_mayor)
            ->update(['order_fa' => $order_formAc]);

        \DB::table('form_acas')
            ->where('id_form_aca', $id)
            ->update(['order_fa' => $order_mayor]);
        
        
        Session::flash('message-correct', 'Datos Académicos reordenados correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DatosPerRequest;
use Illuminate\Support\Facades\Validator;

class ApiFormacionAcademicaController extends Controller
{
    public function register(FormAcaRequest $request){
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
        

        \App\Models\FormAca::create([
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
}
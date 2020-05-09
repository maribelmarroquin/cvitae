<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\FormAca::create([
            'nivel' => $request['nivel'],
            'especialidad' => $request['especialidad'],
            'instituto' => $request['instituto'],
            'ano_ini' => $request['ano_ini'],
            'ano_fin' => $request['ano_fin'],
            'doc' => $request['doc'],
            'ruta_doc' => $request['ruta_doc'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'fk_user_fa' => $id,
        ]);

        Session::flash('message-correct', 'Datos Académicos registrados correctamente');
        return redirect::to('principal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $name_user = Auth::user()->name;
        $formAca= \DB::table('form_acas')
            ->select('id_form_aca', 'nivel', 'especialidad', 'instituto', 'ano_ini', 'ano_fin', 'doc', 'principal','ruta_doc')
            ->where(['id_form_aca' => $id, 'fk_user_fa' => Auth::user()->id])
            ->get();
        if(empty($formAca)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
        else{
            return view('contCV.edit_formAca')->with(['formAcaE'=>$formAca, 'name_user'=>$name_user]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $principal = $request['principal'];

        $act_formAca = \App\FormAca::find($id);
        $act_formAca->nivel = $request->nivel;
        $act_formAca->especialidad = $request->especialidad;
        $act_formAca->instituto = $request->instituto;
        $act_formAca->ano_ini = $request->ano_ini;
        $act_formAca->ano_fin = $request->ano_fin;
        $act_formAca->doc = $request->doc;
        $act_formAca->ruta_doc = $request->ruta_doc;
        $act_formAca->principal = ($principal === 'yes') ? "OK":"-";
        $act_formAca->save();

        Session::flash('message-correct', 'Datos Académicos modificados correctamente');
        return "<script lenguaje=\"JavaScript\">window.opener.location.reload(); window.close();</script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\FormAca::destroy($id);
        Session::flash('message-error', 'Datos Académicos eliminados.');
        return redirect::to('principal');
    }
}

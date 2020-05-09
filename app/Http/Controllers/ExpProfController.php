<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        \App\ExpProf::create([
            'empresa' => $request['empresa'],
            'cargo' => $request['cargo'],
            'funciones' => $request['funciones'],
            'jefe' => $request['jefe'],
            'telefono' => $request['telefono'],
            'inicio_lab' => $request['inicio_lab'],
            'fin_lab' => $request['fin_lab'],
            'motivos' => $request['motivos'],
            'logros' => $request['logros'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'fk_user_ep' => $id,
            ]);

        Session::flash('message-correct', 'Experiencia laboral registrada correctamente.');
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
        $expProf= \DB::table('exp_profs')
            ->select('*')
            ->where(['id_exprof' => $id, 'fk_user_ep' => Auth::user()->id])
            ->get();
        if(empty($expProf)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
        else{
            return view('contCV.edit_expProf')->with(['expProfE'=>$expProf]);
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
        
        $act_expProf = \App\ExpProf::find($id);
        $act_expProf->empresa = $request->empresa;
        $act_expProf->cargo = $request->cargo;
        $act_expProf->funciones = $request->funciones;
        $act_expProf->jefe = $request->jefe;
        $act_expProf->telefono = $request->telefono;
        $act_expProf->inicio_lab = $request->inicio_lab;
        $act_expProf->fin_lab = $request->fin_lab;
        $act_expProf->motivos = $request->motivos;
        $act_expProf->logros = $request->logros;
        $act_expProf->principal = ($principal === 'yes') ? "OK":"-";
        $act_expProf->save();

        Session::flash('message-correct', 'Experiencia Profesional modificada correctamente.');
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
        \App\ExpProf::destroy($id);
        Session::flash('message-error', 'Experiencia Profesional eliminada correctamente.');
        return redirect::to('principal');
    }
}

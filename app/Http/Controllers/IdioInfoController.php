<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;

class IdioInfoController extends Controller
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

        \App\IdioInfo::create([
            'idi_info' => $request['idi_info'],
            'nivel' => $request['nivel'],
            'clasificacion' => $request['clasificacion'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'fk_user_ii'=>$id,
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
        $idioInfo= \DB::table('idio_infos')
            ->select('*')
            ->where(['id_idinfo' => $id, 'fk_user_ii' => Auth::user()->id])
            ->get();
        if(empty($idioInfo)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
        else{
            return view('contCV.edit_idioInfo')->with(['idioInfoE'=>$idioInfo]);
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
        
        $act_idioInfo = \App\IdioInfo::find($id);
        $act_idioInfo->idi_info = $request->idi_info;
        $act_idioInfo->nivel = $request->nivel;
        $act_idioInfo->clasificacion = $request->clasificacion;
        $act_idioInfo->principal = ($principal === 'yes') ? "OK":"-";
        $act_idioInfo->save();

        Session::flash('message-correct', 'Conocimientos Informáticos e Idiomas modificados correctamente');
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
        \App\IdioInfo::destroy($id);
        Session::flash('message-error', 'Conocimientos Informáticos e Idiomas eliminados.');
        return redirect::to('principal');
    }
}

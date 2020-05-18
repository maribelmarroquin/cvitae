<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;

class OtrosController extends Controller
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

        \App\Otros::create([
            'dato' => $request['dato'],
            'des_dato' => $request['des_dato'],
            'ruta_dato' => $request['ruta_dato'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'fk_user_o' => $id,
        ]);

        Session::flash('message-correct', 'Dato registrado correctamente.');
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

        $otros= \DB::table('otros')
            ->select('*')
            ->where(['id_otros' => $id, 'fk_user_o' => Auth::user()->id])
            ->get();
        if(empty($otros)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
            return view('contCV.edit_otrosDat')->with(['otrosE'=>$otros, 'name_user'=>$name_user]);
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

        $act_otros = \App\Otros::find($id);
            $act_otros->dato = $request->dato;
            $act_otros->des_dato = $request->des_dato;
            $act_otros->ruta_dato = $request->ruta_dato;
            $act_otros->principal = ($principal === 'yes') ? "OK":"-";
            $act_otros->save();

        Session::flash('message-correct', 'Dato de interés modificado correctamente.');
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
        \App\Otros::destroy($id);
        Session::flash('message-error', 'Dato eliminado correctamente.');
        return redirect::to('principal');
    }
}

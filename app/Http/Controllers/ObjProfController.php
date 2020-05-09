<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use Session;

class ObjProfController extends Controller
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
        \CV\ObjProf::create($request->all());

        Session::flash('message-correct', 'Objetivo Profesional almacenado correctamente.');
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
        $objProf= \DB::table('obj_profs')
            ->select('*')
            ->where(['id_obj' => $id, 'fk_user_op' => Auth::user()->id])
            ->get();
        if(empty($objProf)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
            return view('contCV.edit_objProf')->with(['objProfE'=>$objProf]);
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
        $act_objProf = \CV\ObjProf::find($id);
        $act_objProf -> fill($request->all());
        $act_objProf->save();

        Session::flash('message-correct', 'Objetivo Profesional modificado correctamente');
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
        \CV\ObjProf::destroy($id);
        Session::flash('message-error', 'Objetivo Profesional eliminado.');
        return redirect::to('principal');
    }
}

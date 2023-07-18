<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

use App\Http\Requests\ObjProfRequest;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ObjProfRequest $request)
    {
        $tabName = 'obj_prof';
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\Models\ObjProf::create([
            'objetivo' => $request['objetivo'],
            'des_obj' => $request['des_obj'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_op'=>$id,
            ]);

        Session::flash('message-correct', 'Objetivo Profesional almacenado correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ObjProfRequest $request, $id)
    {
        $tabName = 'obj_prof';

        $act_objProf = \App\Models\ObjProf::find($id);
        $act_objProf->objetivo = $request->objetivo;
        $act_objProf->des_obj = $request->des_obj;
        $act_objProf->principal = ($request['principal'] === 'yes') ? "OK":"-";
        $act_objProf->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
        $act_objProf->save();

        Session::flash('message-correct', 'Objetivo Profesional modificado correctamente');
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
        $tabName = 'obj_prof';
        \App\Models\ObjProf::destroy($id);
        Session::flash('message-error', 'Objetivo Profesional eliminado.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

/*use App\Http\Requests;*/
use App\Http\Requests\IdioInfoRequest;
use App\Http\Requests\ClasConocimientosRequest;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdioInfoRequest $request)
    {
        $tabName = 'idi_in';
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\Models\IdioInfo::create([
            'idi_info' => $request['idi_info'],
            'nivel' => $request['nivel'].'%',
            'clasificacion' => $request['clasificacion'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_ii'=>$id,
            ]);

        Session::flash('message-correct', 'Conocimientos registrados correctamente');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IdioInfoRequest $request, $id)
    {
        $tabName = 'idi_in';
        $principal = $request['principal'];
        
        $act_idioInfo = \App\Models\IdioInfo::find($id);
        $act_idioInfo->idi_info = $request->idi_info;
        $act_idioInfo->nivel = $request->nivel.'%';
        $act_idioInfo->clasificacion = $request->clasificacion;
        $act_idioInfo->principal = ($principal === 'yes') ? "OK":"-";
        $act_idioInfo->principal_vista = ($request->principal_vista === 'yes') ? "OK":"-";
        $act_idioInfo->save();

        Session::flash('message-correct', 'Conocimientos modificados correctamente');
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
        $tabName = 'idi_in';
        \App\Models\IdioInfo::destroy($id);
        Session::flash('message-error', 'Conocimientos Informáticos e Idiomas eliminados.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    public function storeClas(ClasConocimientosRequest $request){
        $tabName = 'idi_in';
        $id = Auth::user('users')->id;

        \App\Models\ClasConocimientos::create([
            'clasificacion' => $request['clasificacion'],
            'fk_user_clas_conocimientos'=>$id,
            ]);

        Session::flash('message-correct', 'Clasificación de conocimentos registrada correctamente');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    public function destroyClas($id)
    {
        $tabName = 'idi_in';
        \App\Models\ClasConocimientos::destroy($id);
        Session::flash('message-error', 'Clasificación de conocimientos eliminada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

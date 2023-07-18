<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

use App\Http\Requests\OtrosRequest;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtrosRequest $request)
    {
        $tabName = 'otr_dat';
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        \App\Models\Otros::create([
            'dato' => $request['dato'],
            'des_dato' => $request['des_dato'],
            'ruta_dato' => $request['ruta_dato'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_o' => $id,
        ]);

        Session::flash('message-correct', 'Dato registrado correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabName = 'otr_dat';
        $nameUser = Auth::user('users')->name;

        $otros= \DB::table('otros')
            ->select('ruta_dato', 'dato')
            ->where('id_otros', '=', $id )
            ->get();
        
        foreach ($otros as $o) {
            $ruta_dato = $o->ruta_dato;
            $dato = $o->dato;
        }

        \DB::table('otros')
              ->where('id_otros', $id)
              ->update(['ruta_dato' => null]);

        \Storage::disk('public')->delete($nameUser.'/docs/'.$ruta_dato);
        
        Session::flash('message-correct', 'Foto del dato "'.$dato.'", eliminada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OtrosRequest $request, $id)
    {
        $tabName = 'otr_dat';
        $principal = $request['principal'];

        $act_otros = \App\Models\Otros::find($id);
            $act_otros->dato = $request->dato;
            $act_otros->des_dato = $request->des_dato;
            $act_otros->ruta_dato = $request->ruta_dato;
            $act_otros->principal = ($principal === 'yes') ? "OK":"-";
            $act_otros->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
            $act_otros->save();

        Session::flash('message-correct', 'Dato de interés modificado correctamente.');
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
        $tabName = 'otr_dat';
        \App\Models\Otros::destroy($id);
        Session::flash('message-error', 'Dato eliminado correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

}

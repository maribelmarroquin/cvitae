<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/

use App\Http\Requests\FormExAcaRequest;
/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;

class FormExAcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth:web');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormExAcaRequest $request)
    {
        $tabName = 'form_exaca';
        $id = Auth::user('users')->id;
        $principal = $request['principal'];

        if ($request['curso']==='Curso' || $request['curso']==='Conferencias' || $request['curso']==='Taller' || $request['curso']==='Seminario') {
            
            \App\FormExAca::create([
            'curso' => $request['curso'],
            'desc' => $request['desc'],
            'instituto' => $request['instituto'],
            'duración' => $request['duración'],
            'doc_ex' => $request['doc_ex'],
            'ruta_docex' => $request['ruta_docex'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'principal_vista' => ($request['principal_vista'] === 'yes') ? "OK":"-",
            'fk_user_fe' => $id,
            ]);

            Session::flash('message-correct', 'Datos Extra - Académicos registrados correctamente');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);

        }else{
            Session::flash('message-error', '¡Opción incorrecta! Te recomiendo seguir las reglas establecidas :)');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
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
        $tabName = 'form_exaca';
        $nameUser = Auth::user('users')->name;

        $formExAca= \DB::table('form_ex_acas')
            ->select('curso', 'ruta_docex')
            ->where('id_form_exaca', '=', $id )
            ->get();
        
        foreach ($formExAca as $fe) {
            $ruta_docex = $fe->ruta_docex;
            $curso = $fe->curso;
        }

        \DB::table('form_ex_acas')
              ->where('id_form_exaca', $id)
              ->update(['ruta_docex' => null]);

        \Storage::disk('public')->delete($nameUser.'/docs/'.$ruta_docex);
        
        Session::flash('message-correct', 'Foto de documento de "'.$curso.'", eliminada correctamente.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormExAcaRequest $request, $id)
    {
        $tabName = 'form_exaca';
        $principal = $request['principal'];

        if ($request['curso']==='Curso' || $request['curso']==='Conferencias' || $request['curso']==='Taller' || $request['curso']==='Seminario') {

            $act_formExAca = \App\FormExAca::find($id);
            $act_formExAca->curso = $request->curso;
            $act_formExAca->desc = $request->desc;
            $act_formExAca->instituto = $request->instituto;
            $act_formExAca->duración = $request->duración;
            $act_formExAca->doc_ex = $request->doc_ex;
            $act_formExAca->ruta_docex = $request->ruta_docex;
            $act_formExAca->principal = ($principal === 'yes') ? "OK":"-";
            $act_formExAca->principal_vista = ($request['principal_vista'] === 'yes') ? "OK":"-";
            $act_formExAca->save();

            Session::flash('message-correct', 'Datos Extra Académicos modificados correctamente');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);

        }else{
            Session::flash('message-error', '¡Opción incorrecta! Te recomiendo seguir las reglas establecidas :)');
            return redirect::to('principal')->withInput(['tab'=> $tabName]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabName = 'form_exaca';
        \App\FormExAca::destroy($id);
        Session::flash('message-error', 'Datos Extra Académicos eliminados.');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

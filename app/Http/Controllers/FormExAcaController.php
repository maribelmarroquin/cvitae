<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
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

        if ($request['curso']==='Curso' || $request['curso']==='Conferencias' || $request['curso']==='Taller' || $request['Seminario']==='Seminario') {
            
            \App\FormExAca::create([
            'curso' => $request['curso'],
            'desc' => $request['desc'],
            'instituto' => $request['instituto'],
            'duración' => $request['duración'],
            'doc_ex' => $request['doc_ex'],
            'ruta_docex' => $request['ruta_docex'],
            'principal' => ($principal === 'yes') ? "OK":"-",
            'fk_user_fe' => $id,
            ]);

            Session::flash('message-correct', 'Datos Extra - Académicos registrados correctamente');
            return redirect::to('principal');

        }else{
            Session::flash('message-error', '¡Opción incorrecta! Te recomiendo seguir las reglas establecidas :)');
            return redirect::to('principal');
        }
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
        $formExAca= \DB::table('form_ex_acas')
            ->select('*')
            ->where(['id_form_exaca' => $id, 'fk_user_fe' => Auth::user()->id])
            ->get();
        if(empty($formExAca)){
            Session::flash('message-error', 'Sin Acceso');
            return redirect::to('principal');
        }
            return view('contCV.edit_formExAca')->with(['formExAcaE'=>$formExAca, 'name_user' => $name_user]);
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

        if ($request['curso']==='Curso' || $request['curso']==='Conferencias' || $request['curso']==='Taller' || $request['Seminario']==='Conferencias') {

            $act_formExAca = \App\FormExAca::find($id);
            $act_formExAca->curso = $request->curso;
            $act_formExAca->desc = $request->desc;
            $act_formExAca->instituto = $request->instituto;
            $act_formExAca->duración = $request->duración;
            $act_formExAca->doc_ex = $request->doc_ex;
            $act_formExAca->ruta_docex = $request->ruta_docex;
            $act_formExAca->principal = ($principal === 'yes') ? "OK":"-";
            $act_formExAca->save();

            Session::flash('message-correct', 'Datos Extra Académicos modificados correctamente');
            return "<script lenguaje=\"JavaScript\">window.opener.location.reload(); window.close();</script>";

        }else{
            Session::flash('message-error', '¡Opción incorrecta! Te recomiendo seguir las reglas establecidas :)');
            return "<script lenguaje=\"JavaScript\">window.opener.location.reload(); window.close();</script>";
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
        \App\FormExAca::destroy($id);
        Session::flash('message-error', 'Datos Extra Académicos eliminados.');
        return redirect::to('principal');
    }
}

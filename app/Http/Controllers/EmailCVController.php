<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailCVController extends Controller
{
    public function __construct() {
        $this->middleware('consulta.guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty(Auth::user('consulta_cv')->id_consulta)){
            Session::flash('message-error', 'Acceso denegado. No ha iniciado sesión.');
            return redirect::to('/loginConsulta');
        }else{
            return redirect::to('/consultacv');
        }
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
        
        Mail::send('emails.contacto', $request->all(), function($msj){
            $fk = Auth::user('consulta_cv')->fk_user_consulta;
            $email= \DB::table('users')
            ->select('email')
            ->where('id', '=', $fk)
            ->get();

            foreach ($email as $e) {
                $mailto = $e->email;
            }

            $msj->subject('Mensaje de reclutador');
            $msj->to(''.$mailto.'');
        });

        Session::flash('message-correct', 'Mensaje enviado correctamente.');
        return redirect::to('/consultacv');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

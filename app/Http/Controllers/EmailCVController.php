<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use Mail;
use Session;
use Redirect;
use Auth;
use App\Http\Requests\EmailCVRequest;
use App\Http\Controllers\Controller;

class EmailCVController extends Controller
{
    public function __construct() {
        $this->middleware('auth:consulta_cv');
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

    public function store(EmailCVRequest $request)
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

}

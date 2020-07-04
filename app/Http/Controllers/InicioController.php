<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use Auth;
use Str;
use Mail;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty(Auth::user()->id)){
            return view('inicio');
        }else{
            return redirect::to('principal');
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
        $rules = [
            'usuario' => 'required|max:255',
            'email' => 'email|required|max:255',
            'psw' => 'required|max:16|min:8',
            'pswtwo' => 'required|same:psw'
        ];

        $this->validate($request, $rules);

        $email_ex = array();
        $name_ex = array();

        $email = \DB::table('users')
            ->select('email')
            ->where('email', '=', $request->email)
            ->get();

        $name = \DB::table('users')
            ->select('name')
            ->where('name', '=', $request->usuario)
            ->get();

        foreach ($email as $mail) {
            $email_ex = $mail->email;
        }

        foreach ($name as $name_user) {
            $name_ex = $name_user->name;
        }

        if ($request['email'] == $email_ex) {
            Session::flash('message-error', 'El correo electrónico ya ha sido registrado con anterioridad. Favor de utilizar otro.');
        } else {
            if($request['usuario'] == $name_ex){
                Session::flash('message-error', 'Ese nombre de usuario ya existe, favor de intentar con otro usuario. Pudes utilizar letras y numeros.');
            }
            else{
                if ($request['psw'] != $request['pswtwo']) {

                    Session::flash('message-error', 'Las contraseñas no coinciden. Favor de intentarlo nuevamente.');
                } else {
                    /**
                     * Registro de usuario
                     */
                    $request['confirmation_code'] = Str::random(25);

                    \App\User::create([
                        'name' => $request['usuario'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['pswtwo']),
                        'confirmation_code' => $request['confirmation_code'],
                    ]);

                    Mail::send('emails.confirmation_code', $request->all(), function($message) use ($request) {
                        $message->to($request['email'], $request['usuario'])->subject('Por favor, confirme su correo.');
                    });
                    
                    /**
                     * Registro de Diseños de Obsequio
                     */
                    $this->regDisenos($request['email']);

                    
                    /**
                     * Creación de directorios
                     */
                    $directory_user = $request->usuario;
                    $directory_id = "$request->usuario/id";
                    $directory_docs = "$request->usuario/docs";

                    \Storage::makeDirectory($directory_user);
                    \Storage::makeDirectory($directory_id);
                    \Storage::makeDirectory($directory_docs);

                    Session::flash('message-correct', 'Usuario registrado correctamente. Le hemos enviado un mensaje a su cuenta de correo electrónico para verificación. Por favor, realice la verificación para continuar usando la plataforma.');
                }
            }
        }
        return redirect::to('/');

    }

    /**
     * Registro de Diseños de Obsequio
     */
    private function regDisenos($email){
        
        $id_user = \DB::table('users')
            ->select('id')
            ->where('email', '=', $email)
            ->get();
        
        foreach ($id_user as $id) {
            $id_u = $id->id;
        }

        \App\UserDesignsPDF::create([
            'fk_design_pdf' => '1',
            'fk_user_pdf' => $id_u,
            'vigencia_ini_pdf' => \Carbon\Carbon::now(),
            'vigencia_fin_pdf' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\UserDesignsPDF::create([
            'fk_design_pdf' => '2',
            'fk_user_pdf' => $id_u,
            'vigencia_ini_pdf' => \Carbon\Carbon::now(),
            'vigencia_fin_pdf' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\UserDesignsView::create([
            'design_view' => '1',
            'fk_user_design_view' => $id_u, 
            'vigencia_ini_view' => \Carbon\Carbon::now(),
            'vigencia_fin_view' => \Carbon\Carbon::now()->addYears(10),
        ]);

        \App\UserDesignsView::create([
            'design_view' => '2',
            'fk_user_design_view' => $id_u,
            'vigencia_ini_view' => \Carbon\Carbon::now(),
            'vigencia_fin_view' => \Carbon\Carbon::now()->addYears(10),
        ]);
        /**
         * Diseño de vista que permanece.
         */
        \App\DesignViewStay::create([
            'view_stay' => 'EleganceView',
            'fk_user_view' => $id_u,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use Auth;

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

                    \App\User::create([
                        'name' => $request['usuario'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['pswtwo']),
                    ]);

                    $directory_user = $request->usuario;
                    $directory_id = "$request->usuario/id";
                    $directory_docs = "$request->usuario/docs";

                    \Storage::makeDirectory($directory_user);
                    \Storage::makeDirectory($directory_id);
                    \Storage::makeDirectory($directory_docs);

                    Session::flash('message-correct', 'Usuario registrado correctamente.');
                }
            }
        }
        return redirect::to('/');

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

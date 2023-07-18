<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class VerifyEmailController extends Controller
{
    public function verify($code)
    {
        $user = \App\Models\User::where('confirmation_code', $code)->first();

        if (! $user){
            Session::flash('message-error', 'Error de confirmación de correo. Comuníquese con el administrador del sitio.');
        } else{
            $user->confirmed = true;
            $user->confirmation_code = null;
            $user->save();

            Session::flash('message-correct', 'Se ha hecho la verificación de tu correo correctamente.');
        }
        return redirect('/');
    }
}

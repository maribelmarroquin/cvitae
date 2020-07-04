<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Str;
use Redirect;
use Session;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    /*protected $redirectTo = RouteServiceProvider::HOME;*/
    protected $redirectTo = '/';

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {   
        return Auth::guard('web');
    }

    public function broker(){
        return Password::broker(request()->get('web'));
    }

    public function resetPassword($user, $password)
    {
        $this->setUserPassword($user, $password);

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        if($this->guard()->attempt(['email' => $user, 'password' => $password, 'confirmed' => 1])){
            $this->guard()->login($user);
        }else{
            Session::flash('message-error', 'Acceso denegado. No ha realizado la verificación de su correo electrónico. Verifique e intente ingresar nuevamente con su nueva contraseña.');
		    return Redirect::to('/');
        }
    }

    public function showResetForm(Request $request, $token = null){
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;

class DatosPerController extends Controller
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
        /*
        $rules = [
            'ruta' => 'required|max:255|image',
            'nombre' => 'required|max:100',
            'profesion' => 'required|max:100',
            'fecha_nac' => 'required|date_format:Y-m-d|max:50',
            'lugar_nac' => 'max:50',
            'edo_civil' => 'max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|numeric|max:30',
            'email_u' => 'required|email|max:50',
            'sitio' => 'required|url|max:100',
        ];
         
        $messages = [
            'ruta' => 'Foto requerida para el registro de tu CV.',
            'ruta.max' =>'Has excedido la cantidad de caracteres (255) que soporta la ruta de la imagen.',
            'ruta.image' => 'El archivo ingresado no corresponde a una imagen en formato jpeg, png, bmp, gif, o svg.',
            'nombre' => 'El dato Nombre es requerido.'
        ];
        
         
        $this->validate($request, $rules, $messages);
        */

        $id = Auth::user('users')->id;

         \App\DatosPer::create([
            'ruta' => $request['ruta'],
            'nombre' => $request['nombre'],
            'profesion' => $request['profesion'],
            'fecha_nac' => $request['fecha_nac'],
            'lugar_nac' => $request['lugar_nac'],
            'edo_civil' => $request['edo_civil'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'email_u' => $request['email_u'],
            'sitio' => $request['sitio'],
            'fk_user_dp'=>$id,
            ]);
        
        Session::flash('message-correct', 'Datos Personales registrados correctamente');
        return redirect::to('principal');
        
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

        $rules = [
            'ruta' => 'image',
            'nombre' => 'required|max:100',
            'profesion' => 'required|max:100',
            'fecha_nac' => 'required|numeric',
            'lugar_nac' => 'max:50',
            'edo_civil' => 'max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|numeric',
            'email_u' => 'required|email|max:50',
            'sitio' => 'url|max:100',
        ];
         
        $messages = [
            'ruta' => 'Foto requerida para el registro de tu CV.',
            'ruta.max' =>'Has excedido la cantidad de caracteres (255) que soporta la ruta de la imagen.',
            'ruta.image' => 'El archivo ingresado no corresponde a una imagen en formato jpeg, png, bmp, gif, o svg.',
            'nombre' => 'El dato Nombre es requerido.'
        ];
         
        $this->validate($request, $rules, $messages);

        $act_datPer = \App\DatosPer::find($id);
        $act_datPer->ruta = $request->ruta;
        $act_datPer->nombre = $request->nombre;
        $act_datPer->profesion = $request->profesion;
        $act_datPer->fecha_nac = $request->fecha_nac;
        $act_datPer->lugar_nac = $request->lugar_nac;
        $act_datPer->edo_civil = $request->edo_civil;
        $act_datPer->direccion = $request->direccion;
        $act_datPer->telefono = $request->telefono;
        $act_datPer->email_u = $request->email_u;
        $act_datPer->sitio = $request->sitio;
        $act_datPer->save();

        $tabName = "dat_pers";

        Session::flash('message-correct', '¡Datos Personales modificados correctamente!');
        return redirect::to('principal')->with($tabName, 'tabName');
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

    //Ver imagen desde storage
    public  function descargar($nombre){
        $public_path = public_path();
        $url = $public_path.'/storage/'.$nombre;// depende de root en el archivo filesystems.php.
        //verificamos si el archivo existe y lo retornamos
        if (\Storage::exists($nombre))
        {
            return response()->download($url);
        }
        //si no se encuentra lanzamos un error 404.
        abort(404);
    }
}

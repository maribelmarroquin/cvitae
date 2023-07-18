<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

class DesignViewStayController extends Controller
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
    public function store(Request $request){
        $tabName = "exportar";
        $id = Auth::user('users')->id;

         \App\Models\DesignViewStay::create([
            'view_stay' => $request['customSwitch'],
            'fk_user_view'=> $id
            ]);
        
        Session::flash('message-correct', 'Vista registrada correctamente');
        return redirect::to('principal')->with($tabName, 'tabName');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $act_dvs = \App\Models\DesignViewStay::find($id);
        $act_dvs->view_stay = $request->customSwitch;
        $act_dvs->save();

        $tabName = "exportar";

        Session::flash('message-correct', '¡Vista actualizada correctamente!');
        return redirect::to('principal')->withInput(['tab'=> $tabName]);
    }
}

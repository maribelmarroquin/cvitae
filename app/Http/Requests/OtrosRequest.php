<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtrosRequest extends FormRequest
{

    protected $redirect = '/principal?tab=otr_dat';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'dato'=>'required|max:100',
            'des_dato'=>'required|max:255',
            'ruta_dato'=>'max:1000',
            'principal'=>'max:3',
            'principal_vista'=>'max:3'
        ];
    }

    public function attributes(){
        return [
            'dato'=>'"Dato de interés"',
            'des_dato'=>'"Descripción"',
            'ruta_dato'=>'"Imagen del dato"',
            'principal'=>'"¿Mostrar en PDF?"',
            'principal_vista'=>'"¿Mostrar en consulta web?"'
        ];
    }
}

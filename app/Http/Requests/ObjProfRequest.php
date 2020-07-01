<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjProfRequest extends FormRequest
{

    protected $redirect = '/principal?tab=obj_prof';

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
            'objetivo'=>'max:100',
            'des_obj'=>'required|max:600',
            'principal'=>'max:3',
            'principal_vista'=>'max:3'
        ];
    }

    public function attributes()
    {
        return [
            'objetivo'=>'"Dato de interés"',
            'des_obj'=>'"Descripción"',
            'principal'=>'"¿Mostrar en PDF?"',
            'principal_vista'=>'"¿Mostrar en consulta web?"'
        ];
    }
}

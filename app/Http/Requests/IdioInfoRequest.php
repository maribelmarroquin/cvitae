<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdioInfoRequest extends FormRequest
{

    protected $redirect = '/principal?tab=idi_in';

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
            'idi_info' => 'required|max:100',
            'nivel' => 'numeric|required|max:100|min:1',
            'clasificacion' => 'numeric|required',
            'principal' => 'max:3',
            'principal_vista' => 'max:3'
        ];
    }

    public function attributes(){
        return [
            'idi_info' => '"Conocimiento Informático o Idioma"',
            'nivel' => '"Nivel"',
            'clasificacion' => '"Clasificación"',
            'principal' => '"¿Mostrar en PDF?"',
            'principal_vista' => '"¿Mostrar en consulta web?"'
        ];
    }
}

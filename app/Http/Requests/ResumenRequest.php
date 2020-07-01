<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumenRequest extends FormRequest
{

    protected $redirect = '/principal?tab=resumen';

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
            'titulo' => 'required|max:80',
            'resumen' => 'required|max:600',
            'principal' => 'max:3',
            'principal_vista' => 'max:3'
        ];
    }

    /**
     * Get the validation error messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        
        return [
            /*
            'titulo.required' => 'El campo "Título" es indispensable.',
            'titulo.max' =>'Has excedido la cantidad de caracteres (80) que soporta el campo "Título".',
            'resumen.required' => 'Dato resumen, requerido.',
            'resumen.max' =>'Has excedido la cantidad de caracteres (600) que soporta el campo "Resumen".',
            'principal.max' => 'El dato del campo principal, sólo puede contener tres caracteres o menos.'
            */
        ];
        
    }

    public function attributes()
    {
        return [
            'titulo' => '"Título"',
            'resumen' => '"Resumen"',
            'principal' => '"¿Mostrar en PDF?"',
            'principal' => '"¿Mostrar en consulta web?"'
        ];
    }
}

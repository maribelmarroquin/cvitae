<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExAcaRequest extends FormRequest
{

    protected $redirect = '/principal?tab=form_exaca';

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
            'curso' => 'required|max:50',
            'desc' => 'max:200',
            'instituto' => 'required|max:50',
            'duración' => 'required|max:50',
            'doc_ex' => 'required|max:50',
            'ruta_docex' => 'max:1000|image',
            'principal' => 'max:3',
            'principal_vista' => 'max:3'
        ];
    }

    public function attributes(){
        return [
            'curso' => '"Curso, Taller o Seminario"',
            'desc' => '"Descripción"',
            'instituto' => '"Instituto"',
            'duración' => '"Duración"',
            'doc_ex' => '"Documento Obtenido"',
            'ruta_docex' => '"Imagen de Documento Obtenido"',
            'principal' => '"¿Mostrar en PDF?"',
            'principal_vista' => '"¿Mostrar en consulta web?"'
        ];
    }
}

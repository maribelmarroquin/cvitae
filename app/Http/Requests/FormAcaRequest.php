<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAcaRequest extends FormRequest
{

    protected $redirect = '/principal?tab=form_aca';

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
            'nivel' => 'required|max:50',
            'especialidad' => 'max:50',
            'instituto' => 'required|max:50',
            'ano_ini' => 'required|max:50|date_format:Y-m',
            'status' => 'required|in:cursando,fin',
            'ano_fin' => 'max:50',
            'doc' => 'required|max:50',
            'ruta_doc' => 'max:1000|image',
            'principal' => 'max:3',
            'principal_vista' => 'max:3'
        ];
    }

    public function attributes(){
        return [
            'nivel' => '"Nivel académico"',
            'especialidad' => '"Especialidad"',
            'instituto' => '"Instituto"',
            'ano_ini' => '"Año de inicialización"',
            'status' => '"Estatus"',
            'ano_fin' => '"Año de finalización"',
            'doc' => '"Documento obtenido"',
            'ruta_doc' => '"Imagen de documento obtenido"',
            'principal' => '"¿Mostrar en PDF?"',
            'principal_vista' => '"¿Mostrar en consulta web?"'
        ];
    }
}

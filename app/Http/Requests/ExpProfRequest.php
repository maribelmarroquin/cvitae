<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpProfRequest extends FormRequest
{

    protected $redirect = '/principal?tab=exp_prof';

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
            'cargo'=>'required|max:50',
            'empresa'=>'required|max:50',
            'funciones'=>'required|max:500',
            'jefe'=>'required|max:50',
            'telefono'=>'max:13',
            'inicio_lab'=>'required|max:50|date_format:Y-m',
            'fin_lab'=>'max:50',
            'status_fin'=>'required|in:laborando,fin',
            'motivos'=>'required|max:50',
            'logros'=>'required|max:500',
            'principal'=>'max:3',
            'principal_vista'=>'max:3'
        ];
    }

    public function attributes(){
        return [
            'cargo'=>'"Cargo"',
            'empresa'=>'"Empresa"',
            'funciones'=>'"Funciones desarrolladas"',
            'jefe'=>'"Nombre de Jefe inmediato"',
            'telefono'=>'"Teléfono"',
            'inicio_lab'=>'"Fecha de inicio de labores"',
            'fin_lab'=>'"Fecha de finalización de labores"',
            'status_fin'=>'"Estatus actual"',
            'motivos'=>'"Motivos de finalización"',
            'logros'=>'"Logros"',
            'principal'=>'"¿Mostrar en PDF?"',
            'principal_vista'=>'"¿Mostrar en consulta web?"'
        ];
    }
}

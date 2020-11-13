<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosPerRequest extends FormRequest
{

    protected $redirect = '/principal?tab=dat_pers';

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
            'ruta' => 'max:1000|image',
            'nombre' => 'required|max:100',
            'profesion' => 'required|max:100',
            'fecha_nac' => 'required|date_format:Y-m-d|max:50',
            'lugar_nac' => 'required|max:50',
            'edo_civil' => 'required|max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|max:13',
            'email_u' => 'required|email|max:50',
            'sitio' => 'max:100|url'
        ];
    }

    public function attributes()
    {
        return [
            'ruta' => '"Foto ID"',
            'nombre' => '"Nombre"',
            'profesion' => '"Profesión"',
            'fecha_nac' => '"Fecha de Nacimiento"',
            'lugar_nac' => '"Lugar de Nacimiento"',
            'edo_civil' => '"Estado Civil"',
            'direccion' => '"Domicilio"',
            'telefono' => '"Teléfono"',
            'email_u' => '"Email"',
            'sitio' => '"Sitio Web"'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailCVRequest extends FormRequest
{
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
            'e_name'=>'required|max:100',
            'e_email'=>'required|email|max:100',
            'e_mensaje'=>'required|max:1000',
        ];
    }

    public function attributes(){
        return [
            'e_name'=>'"Nombre del contacto"',
            'e_email'=>'"Correo electrónico"',
            'e_mensaje'=>'"Mensaje"',
        ];
    }
}

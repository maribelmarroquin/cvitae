<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClasConocimientosRequest extends FormRequest
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
            'clasificacion' => 'required|max:60'
        ];
    }

    public function attributes(){
        return [
            'clasificacion' => '"Clasificación"'
        ];
    }
}

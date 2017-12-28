<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearDatosPersona extends FormRequest
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
            'apellido' => 'required',
            'name' => 'required',
            'dni' => 'required',
            'cuil' => 'required',
            'carrera_cursa' => 'required'
        ];
    }
}

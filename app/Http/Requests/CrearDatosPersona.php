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
        return[
        'apellido' => 'required|string|max:256',
        'nombre' => 'required|string|max:256',
        'dni' => 'required|numeric|min:0|max:100000000',
        //'imagen_dni' => 'mimes:jpeg,bmp,png,jpg|required',
        'cuil' => 'required|numeric|min:0|max:100000000000',
        'estcivil' => 'required',
        'cumple' => 'date_format:Y-m-d|required',
        'domi' => 'required|max:256',
        'ciudad' => 'required|string|max:256',
        'cp' => 'required|numeric|max:10000',
        'provincia' => 'required|string|max:256',
        'nacionalidad' => 'required|string|max:256',
        'cel' => 'required|numeric|min:999999|max:10000000000',
        'email' => 'required|email',
        //'face' => 'required
        'carrera_cursa' => 'required|string|max:256',
        'anioingreso' => 'required|numeric|min:999|max:10000',
        'trabaja' => 'required',
        'sueldo' => 'required|numeric|min:0|max:1000000',
        'beca' => 'required',
        'pasan' => 'required',
        'asig' => 'required',
        //'otrosing' => 'required',
        'domicursa' => 'required|max:256',
        'casafam' => 'required',
        'alq' => 'required',
        //'montoalq' => 'required', if a un futuro
        'urbano' => 'required',
        //'cantviaja' => 'required|numeric', if a unfuturo
        'mediadist' => 'required',
        //'preciopasaje' => 'required', if a futuro
        //'cantviajamedia' => 'required', if a futuro 
        /*'parentesco0' => 'required',
        'apeynom0' => 'required',
        'dni0' => 'required',
        'imagen_dni0' => 'required',
        'edad0' => 'required',
        'ocu0' => 'required',
        'ingreso0' => 'required',
        'imagen_ingreso0' => 'required',
        'imagen_anses0' => 'required',*/
        'propietario' => 'required',
        'alquila' => 'required',
        //'precioalquiler' => 'required', if a futuro
        'prestada' => 'required',
        'otrosvivienda' => 'required',
        'campo' => 'required',
        //'has' => 'required', if a futuro
        //'actividad' => 'required', if a futuro
        'terreno' => 'required',
        //'terrenocant' => 'required', if futuro
        'auto' => 'required',
        //'autocant' => 'required', if futuro
        'moto' => 'required',
        //'motocant' => 'required', if futuro
        //'enfermedad0' => 'required',
        //'incapacidad0' => 'required',
        //'imagen_incapacidad0' => 'required',
        //'motivos' => 'required', ver con text area
        ];
    }
/*
    public function messages(){
        return[
        'campoXX' => 'error personalizado',


        ];
    }*/
}

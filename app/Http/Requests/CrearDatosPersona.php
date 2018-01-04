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
        return [/*
                'apellido' => 'required|string',
                'nombre' => 'required|string',
                'dni' => 'required',
                'image' => 'required', //Darle un mejor nombre
                'cuil' => 'required',
                'estcivil' => 'required',
                'cumple' => 'required',
                'domi' => 'required',
                'ciudad' => 'required|string',
                'cp' => 'required|numeric',
                'provincia' => 'required|string',
                'nacionalidad' => 'required|string',
                'cel' => 'required',
                'validate-email' => 'required', //Este campo esta mal
                //'face' => 'required',         no rquerido
                'carrera_cursa' => 'required',
                'year' => 'required',   
                'aniocursado' => 'required|numeric',
                'trabaja' => 'required',
                //'sueldo' => '123',        no requerido
                'beca' => 'required',
                'pasan' => 'required',
                'asig' => 'required',
                'otrosing' => 'required',   
                'domicursa' => 'required',
                'casafam' => 'required',
                'alq' => 'required',
                //'montoalq' => '123123',   no req
                'urbano' => 'required',
                'cantviaja' => 'required|numeric',
                'mediadist' => 'required',
                //'preciopasaje' => '123123',
                //'cantviajamedia' => '1',
                /*'parentesco0' => 'bbb',
                'apeynom0' => 'aa',
                'dni0' => '22',
                'imagen_dni0' => 'fruta.png',
                'edad0' => '123',
                'ocu0' => 'asd',
                'ingreso0' => '22',
                'imagen_ingreso0' => 'tierra.png',
                'imagen_anses0' => 'tierra.png',
                'propietario' => 'on',
                'alquila' => 'on',
                'precioalquiler' => '12312',
                'prestada' => 'on',
                'otrosvivienda' => 'asdasd',
                'campo' => 'on',
                'has' => '12',
                'actividad' => 'asdasd',
                'terreno' => 'on',
                'terrenocant' => '1',
                'auto' => 'on',
                'autocant' => '1',
                'moto' => 'on',
                'motocant' => '1',
                'enfermedad0' => 'bbb',
                'incapacidad0' => 'bbbb',
                'imagen_incapacidad0' => 'animal.png',
                'motivos' => 'asdasd' 
                agregar los value a los radio... siempre pasa ON 
                la tabla dinamica esta como required
                validate email mal el campo*/
                        ];
    }
/*
    public function messages(){
        return[
        'campoXX' => 'error personalizado',


        ];
    }*/
}

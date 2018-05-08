<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Inscripcione extends Model
{
	    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->user_id  && Auth::user()) {
            $this->user_id = Auth::user()->id;
           $this->user_nombre = Auth::user()->name;
        }

         parent::save();

    }
    
    /************* Relacion  con las otras clases ... A revisar **************/
     public function user_id()
    {
        return $this->hasMany(User::class,'user_id','id');
    }



    public function dame_id(){
        return Auth::user()->id;
    }


    /////////////////////////////////////////////////////////////////////

    //////////PAra calcular el merito... se podria llamar a una funcion externa...///

    public function Inscribir($request){
        echo "HOLAAAAAAAAAA estamos en Inscripcione.php";
        $inscripto = new Inscripcione();
            
         //calculo de meritos??¡¡?¡?
        if ($request->cond == 1){
            $meritos = 100;
            $obs = "Hola 2";
        }elseif ($request->cond == 2) {
            $meritos = 200;
            $obs = "Hola 2";
        }
        try{
        $inscripto->user_id = $request->user_id;
        $inscripto->user_nombre = $request->nombre;
        $inscripto->carrera_nombre = $request->carrera_cursa;
        // esto falta ver
        $inscripto->facultad_nombre = "Fcyt"; 
        $inscripto->sede_nombre = "Oro ve";
        $inscripto->univ_nombre = "UADER";
        //hasta aca
        $inscripto->merito = $meritos;
        $inscripto->observacion = $obs;
        $inscripto->save();
    }

        catch (\Exception $e){
           dd($e);

           // abort(404);//return redirect()->route('datospersona.index')->with('msg', ' Algo salio mal prueba de nuevo.');

        }
        return redirect()->route('home')->with('info', 'Hemos recibido tu inscripcion');
    }

    


}
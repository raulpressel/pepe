<?php
namespace App;
use DB;

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
        //echo "HOLAAAAAAAAAA estamos en Inscripcione.php";
        dd($request);
        $aux_beca =  DB::table('becas')->where('habilitada', "Si")->first(); //Si tiene mas becas habilitada  ardeee!
        //dd($aux_beca);
        $inscripto = new Inscripcione();
            


        try{
            /*
            /////////////////////////////////////////////////
                PUNTAJE POR PROCEDENCIA
            /////////////////////////////////////////////////    
            */

            //$procedencia?========??????????????========???;


            /*
            /////////////////////////////////////////////////
                PUNTAJE TOTAL DE INGRESOS CON LOS FAMILIARES
            /////////////////////////////////////////////////    
            */
            
            $cant_grupo_familiar = ;//sumar todos los familiares
            $ingreso_total_familiar =; //sumar todos los sueldos de los fam mas 1(estudiante)
            $alquiler_mensual = ;//mensual postulante o mensual familiar?
            $transporte_mensual =; //suma de todos los viajes*cant viajes?
            $otros_gastos = ;   //que gastos?

            $total_ingreso_por_persona=($ingreso_total_familiar-$alquiler_mensual-$transporte_mensual-$otros_gastos)/$cant_grupo_familiar;

            if ($total_ingreso_por_persona<1500) {
                $puntaje_total_ingresos=40;
            }else{
                if($total_ingreso_por_persona<12001){
                  $puntaje_total_ingresos=(100-1*($total_ingreso_por_persona*100/12000))*0.4;  
                }else{
                    $puntaje_total_ingresos=0;
                }
            }


            /*
            /////////////////////////////////////////////////
                PUNTAJE POR ENFERMEDADES
            /////////////////////////////////////////////////
            */

            if($disca_estudiante == "Si"){      //estudiante tiene discapacidad
                $discapacidad = 20;
            }else{
                $discapacidad=0;
            }
            for($l=0;$l<count($request->consideraciones);$l++) //recorro todos los fam
            {
                if ($familiar_discapacidad = "Si") { //familiar tiene discapacidad
                    $discapacidad_fam=10;
                    break 2; //salgo del if y del for, ya encontro un fam con disc
                }else{
                    $discapacidad_fam=0;
                }
            }
            
            $total_discapacidad=$discapacidad+$discapacidad_fam; //corresponde???

            /*
            /////////////////////////////////////////////////
                PUNTAJE POR SITUACION ACADEMICA
            /////////////////////////////////////////////////    
            */

            if($condicion_estudiante=="Ingresante"){
                if($promedio=<6){           //agregar promedio al form
                    $promedio_secundaria=0;
                }else{
                    if ($promedio<7) {
                        $promedio_secundaria=5;
                    }else{
                        if($promedio<8){
                            $promedio_secundaria=15;
                        }else{
                            if ($promedio<9) {
                              $promedio_secundaria=25;
                            }else{
                                $promedio_secundaria=30;
                            }
                        }
                    }
                }
                else{
                    if($condicion_estudiante=="Renovante" or $condicion_estudiante=="Nuevo" or $condicion_estudiante=="Condicional"){
                        if($corresponde==""){       //que es corresponde?
                            $academico=0;
                        }else{
                            if($corresponde=="Si"){
                                $academico=30;
                            }else{
                                $academico=10;
                            }
                        }
                    }
                }

            }
            $total_academico=$promedio_secundaria+$academico;


            $merito=$total_academico+$total_discapacidad+$total_ingreso_por_persona;






            $inscripto->user_id = $request->user_id;
            $inscripto->user_nombre = $request->nombre;
            $inscripto->carrera_nombre = $request->carrera_cursa;
            // esto falta ver
            $inscripto->facultad_nombre = "Facultad de Ciencias y Tecnologia"; 
            $inscripto->sede_nombre = "Oro verde";
            $inscripto->univ_nombre = "U.A.D.E.R";
            $inscripto->beca_id = $aux_beca->id;
            $inscripto->beca_nombre = $aux_beca->nombre;
            
            //hasta aca
            $inscripto->merito = 100;
            $inscripto->observacion = 'Alta inicial';
            $inscripto->save();
    }

        catch (\Exception $e){
           dd($e);

           // abort(404);//return redirect()->route('datospersona.index')->with('msg', ' Algo salio mal prueba de nuevo.');

        }
        return redirect()->route('home')->with('info', 'Hemos recibido tu inscripcion');
    }





}
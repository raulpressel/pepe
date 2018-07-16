<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\DatosPersona;
use Illuminate\Http\Request;
use App\Beca;
use App\User;
use App\Provincia;
use App\Localidad;
use App\familiar;
use App\consideracione;
use DB;
use App\Inscripcione;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CrearDatosPersona;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class DatosPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth'); //solo logeados acceden
        $this->middleware('datosp', ['only' => ['create', 'store', 'index']]); //intercepta only o except
    }




    public function index()
    {
        $dato = DatosPersona::with(['user_name', 'user_id'])->get();
        $user = Auth::user(); 
        $carrera = DB::table('carreras')->get();
        
        
        
        return view('datospersona.index', compact('dato','user','carrera'));

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = Auth::user();
        
        $id = DB::table('datos_personas')->where('user_id', $user->id)->first(); //devuelvo el primero que encuentra

        $carrera = DB::table('carreras')->get();
        $condicion = DB::table('condicion')->get();
        return view ('datospersona.create', compact('user', 'carrera', 'id', 'condicion'));



        
    }

    public function getLocalidades(Request $request, $id)
    {
        if($request->ajax()){
            $localidad = Localidad::localidades($id);
            return response()->json($localidad);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearDatosPersona $request)
    {        
        //dd($request, $request->consideraciones, $request->familiar);
         try{
            $datos = new DatosPersona;
            $datos->user_id = $request->user_id;
            $datos->user_apellido = $request->apellido;
            $datos->user_name = $request->nombre;
            $datos->user_dni = $request->dni;
           // $datos->imagen_dni = $request->file('files');
            

            Storage::makeDirectory($request->dni); //creo el directorio con el dni, para guardar las imagenes
            
            if ( $request->hasFile('imagen_frente') ){                     // para saber si cargo alguna imagen
                $img = $request->file('imagen_frente');
                $nombre='imagen_frente'.time().'.'.$img->getClientOriginalExtension();
                $img->storeAs($request->dni,$nombre);
                $datos->imagen_dni_frente = $request->dni.'/'.$nombre;
            }else{
                //return abort(404);
            }

        
            if ( $request->hasFile('imagen_dorso') ){
                $img = $request->file('imagen_dorso');
                $nombre='imagen_dorso'.time().'.'.$img->getClientOriginalExtension();
                $img->storeAs($request->dni,$nombre);
                $datos->imagen_dni_dorso = $request->dni.'/'.$nombre;
            }else{
                //return abort(404);
            }
            
        
        
            if ( $request->hasFile('anses') ){     
                    $img = $request->file('anses');
                    $nombre='certificado_anses'.time().'.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->cert_anses = $request->dni.'/'.$nombre;
                    
                }
                else{

                }

            $datos->cuil = $request->cuil;
            $datos->estado_civil = $request->estcivil;
            $datos->cumple = $request->cumple;
            $datos->domicilio = $request->domi;
            $datos->provincia = $request->provincia;
            $datos->localidad = $request->localidad;
            $datos->cp = $request->cp;
            $datos->nacionalidad = $request->nacionalidad;
            $datos->cel = $request->cel;
            $datos->user_email = $request->email;
            $datos->face = $request->face;

            $datos->disca_estudiante = $request->discaest;//agregada hasta el prox //
            
            if ( $request->hasFile('imagendiscaest') ){     
                $img = $request->file('imagendiscaest');
                $nombre='certificado_discapacidad'.time().'.'.$img->getClientOriginalExtension();
                $img->storeAs($request->dni,$nombre);
                $datos->certificado_discapacidad = $request->dni.'/'.$nombre;
                }        
                else{
                }


            $datos->condicion_estudiante = $request->cond;

            if ($request->hasFile('constancia')){     
                $img = $request->file('constancia');
                $nombre='constancia_estudiante'.time().'.'.$img->getClientOriginalExtension();
                $img->storeAs($request->dni,$nombre);
                $datos->constancia_estudiante = $request->dni.'/'.$nombre;
                }
                else{
                }
            
        
            if ( $request->hasFile('certificado') ){     
                $img = $request->file('certificado'); 
                $f=0;
                $rutas = [];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='certificado_estudiante-'.$f.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->certificado_estudiante = collect($rutas)->implode(' - ');
                        $f++;
                    }
                }
                else{
                    $nombre='certificado_estudiante'.time().'.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->certificado_estudiante = $request->dni.'/'.$nombre;
                }
            }

            $datos->carrera_cursa = $request->carrera_cursa;
            $datos->anio_ingreso = $request->anioingreso;
            $datos->anio_cursado = $request->aniocursado;
            $datos->tiene_trabajo = $request->trabaja;
            $datos->tipo_trabajo = $request->actlab;

            if ( $request->hasFile('comping') ){     
                $img = $request->file('comping');
                $g=0; 
                $rutas = [];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_ingresos-'.$g.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->comprobante_ingresos = collect($rutas)->implode(' - ');
                        $g++;
                    }
                }
                else{
                    $nombre='comprobante_ingresos'.time().'.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->comprobante_ingresos = $request->dni.'/'.$nombre;
                }
            }

            $datos->sueldo = $request->sueldo;
            $datos->tiene_beca = $request->beca;
            $datos->tiene_progresar = $request->progresar;
            $datos->tiene_asig = $request->asig;
            $datos->otros_ing = $request->otrosing;
            $datos->domi_cursado = $request->domicursa;
            $datos->casa_fam = $request->casafam;
            $datos->tiene_alq = $request->alq;

            if ( $request->hasFile('reciboalq') ){     
                $img = $request->file('reciboalq');
                $ext = $img->getClientOriginalExtension();
                $nombre='recibo_alquiler-'.time().'.'.$ext;
                $img->storeAs($request->dni,$nombre);
                $datos->recibo_alquiler = $request->dni.'/'.$nombre;
            }
            else{
            }

            $datos->monto_alq = $request->montoalq;
            $datos->usa_urbano = $request->urbano;
            $datos->cant_viajes = $request->cantviaja;
            $datos->usa_media_dist = $request->mediadist;
            $datos->cant_viaja_media = $request->cantviajamedia;
            
            //return response()->json($request);

            
            if ( $request->hasFile('recibopasaj') ){     
                $img = $request->file('recibopasaj'); 
                $ext = $img->getClientOriginalExtension();
                $nombre='recibo_pasaje-'.time().'.'.$ext;
                $img->storeAs($request->dni,$nombre);
                $datos->recibo_pasaje = $request->dni.'/'.$nombre;
                }
                else{
                }

            $datos->precio_pasaje = $request->preciopasaje;
            $datos->es_propietario = $request->propietario;
            $datos->alquila = $request->alquila;

            if ( $request->hasFile('reciboalqfam') ){     
                $img = $request->file('reciboalqfam'); 
                $nombre='recibo_alquiler_familiar'.time().'.'.$img->getClientOriginalExtension();
                $img->storeAs($request->dni,$nombre);
                $datos->recibo_alquiler_familiar = $request->dni.'/'.$nombre;
                }
                else{
                }
    

            $datos->precio_alquiler = $request->precioalquiler;
            $datos->prestada = $request->prestada;
            $datos->otros_vivienda = $request->otrosvivienda;
            $datos->tiene_campo = $request->campo;
            $datos->cant_has = $request->has;
            $datos->actividad = $request->actividad;
            $datos->tiene_terreno = $request->terreno;
            $datos->cant_terreno = $request->terrenocant;
            $datos->tiene_auto = $request->auto;
            $datos->cant_auto = $request->autocant;
            $datos->tiene_moto = $request->moto;
            $datos->cant_moto = $request->motocant;
            $datos->motivos = $request->motivos;
            $datos->save();

            for ($k=0;$k<count($request->consideraciones);$k++) {
                $con = new consideracione;
                
                $con->user_id = $request->user_id;
                $con->parentesco = $request->consideraciones[$k]['parentesco'];
                $con->enfermedad = $request->consideraciones[$k]['enfermedad'];
                $con->incapacidad = $request->consideraciones[$k]['incapacidad'];

              
                if ( $request->hasFile('consideraciones.*.imagen') ){     
                    $img = $request->file('consideraciones.*.imagen');
                    $auxx=0;
                    $rutas=[];
                    if(is_array($img)){
                      foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='imagen_discapacidad_familiar-'.$auxx.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $con->cert_incapacidad = collect($rutas)->implode(' - ');
                        $auxx++;
                        }
                    }
                    else{
                    $ext=$img->getClientOriginalExtension();
                    $nombre='imagen_discapacidad_familiar-'.'-'.time().'.'.$ext;
                    $img->storeAs($request->dni,$nombre);
                    $con->cert_incapacidad = $request->dni.'/'.$nombre;
                    }
                }
                


                $con->save();
            
            }

            
            for($l=0;$l<count($request->familiar);$l++) {
                $fam = new familiar;
                $fam->user_id = $request->user_id;
                $fam->parentesco = $request->familiar[$l]['parentesco'];
                $fam->apeynom = $request->familiar[$l]['apeynom'];
                $fam->dni = $request->familiar[$l]['dnifam'];

                Storage::makeDirectory($request->dni."/familiar");
                 $ruta= $request->dni."/familiar";

                if ( $request->hasFile('familiar.*.frente') ){ 
                    $img = $request->file('familiar.*.frente'); 
                    $con=0;
                    $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='imagen_dni_familiar-frente-'.$con.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->imagen_dni_frente = collect($rutas)->implode(' - ');
                        $con++;
                        }
                    }
                    else{
                    $ext = $img->getClientOriginalExtension();
                    $nombre='imagen_dni_familiar-frente-'.$l.'-'.time().'.'.$ext;
                    $img->storeAs($request->dni,$nombre);
                    $fam->imagen_dni_frente = $ruta.'/'.$nombre;
                    }
                }
                

                if ( $request->hasFile('familiar.*.dorso') ){     
                    $img = $request->file('familiar.*.dorso'); 
                    $con1=0;
                    $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='imagen_dni_familiar-dorso-'.$con1.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->imagen_dni_frente = collect($rutas)->implode(' - ');
                        $con1++;
                        }
                    }else
                    {
                    $ext = $img->getClientOriginalExtension();
                    $nombre='imagen_dni_familiar-dorso-'.$l.'-'.time().'.'.$ext;
                    $img->storeAs($request->dni,$nombre);
                    $fam->imagen_dni_dorso = $ruta.'/'.$nombre;
                    }
                }
                

                $fam->edad = $request->familiar[$l]['edadfam'];
                $fam->ocupacion = $request->familiar[$l]['ocupacionfam'];
                $fam->actividad_laboral = $request->familiar[$l]['actlab'];

                if ( $request->hasFile('familiar.*.comping1') ){    // para saber 
                  $img = $request->file('familiar.*.comping1');
                  $con2=0;
                  $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_ingresos_1_fam-'.$con2.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->comprobante_ingresos_1 = collect($rutas)->implode(' - ');
                        $con2++;
                        }
                    }
                    else
                    {
                    $ext = $img->getClientOriginalExtension();
                    $nombre = 'comprobante_ingresos_1_fam-'.$l.'-'.time().'.'.$ext;
                    $img->storeAs($ruta,$nombre); 
                    $fam->comprobante_ingresos_1=$ruta.'/'.$nombre;
                    }
                }

            
                if ( $request->hasFile('familiar.*.comping2') ){    // para saber 
                  $img = $request->file('familiar.*.comping2');
                  $con3=0;
                  $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_ingresos_2_fam-'.$con3.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->comprobante_ingresos_2 = collect($rutas)->implode(' - ');
                        $con3++;
                        }
                    }else
                    { 
                    $ext = $img->getClientOriginalExtension();
                    $nombre = 'comprobante_ingresos_2_fam-'.$l.'-'.time().'.'.$ext;
                    $img->storeAs($ruta,$nombre); 
                    $fam->comprobante_ingresos_2=$ruta.'/'.$nombre;
                    }
                }


                if ( $request->hasFile('familiar.*.comping3') ){    // para saber 
                  $img = $request->file('familiar.*.comping3');
                  $con4=0;
                 $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_ingresos_3_fam-'.$con4.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->comprobante_ingresos_3 = collect($rutas)->implode(' - ');
                        $con4++;
                        }}
                        else
                        {
                      $ext = $img->getClientOriginalExtension();
                      $nombre = 'comprobante_ingresos_3_fam-'.$l.'-'.time().'.'.$ext;
                      $img->storeAs($ruta,$nombre); 
                      $fam->comprobante_ingresos_3=$ruta.'/'.$nombre;
                  }
              }
            



                $fam->ingresos = $request->familiar[$l]['ingresosfam'];



                if ( $request->hasFile('familiar.*.ansesfam') ){    // para saber 
                  $img = $request->file('familiar.*.ansesfam');
                  $con5=0;
                  $rutas = [];
                    if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_anses'.$con5.time().'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->anses = collect($rutas)->implode(' - ');
                        $con5++;
                        }}
                        else
                        {
                      $ext = $img->getClientOriginalExtension();
                      $nombre = 'comprobante_anses'.$l.'-'.time().'.'.$ext;
                      $img->storeAs($ruta,$nombre); 
                      $fam->anses=$ruta.'/'.$nombre;
                  }
              }

              $fam->save();
            }
            $inscripto = new Inscripcione();
            $inscripto->Inscribir($request);
        }
           

           /* if (auth()->check()) {
                auth()->user()->datos()->save($datos);
            }

            event(new MessageWasReceived($datos));
            */
        //esta forma sirve cuando sabemos que siempre tenemos un usario autenticado
        //auth()->user()->messages()->create($request->all());

        catch (\Exception $e){
           dd($e);

           // abort(404);//return redirect()->route('datospersona.index')->with('msg', ' Algo salio mal prueba de nuevo.');

        }
        return redirect()->route('home')->with('info', 'Hemos recibido tu inscripcion');
        //meter el alert https://www.youtube.com/watch?v=t2OgwDHKIkQ

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function show(DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    //public function edit(DatosPersona $datosPersona)
    public function edit($user_id)
    {
        $user = Auth::user();
        
        $carrera = DB::table('carreras')->get();
        $condicion = DB::table('condicion')->get();
        

        //$datos = DatosPersona::findOrFail($user_id);// si descomento esto se edita con el id de datos persona y no con el user_id por eso el datos de abajo VER


        $datos = DB::table('datos_personas')->where('user_id', $user->id)->first(); //devuelvo el primero que encuentra

        return view('datospersona.edit', compact('datos','carrera', 'user','condicion'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosPersona $datosPersona)
    {

        
       /* $datos_upd = DatosPersona::findOrFail($datosPersona->id);

        $datos_upd->update($request->all());            

        return redirect()->route('datosPersona.index');

        crear la vista..... (datospersona->id andara?=)
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosPersona $datosPersona)
    {
        //
    }



    public function revision(Request $request){
        dd($request);
    }




}

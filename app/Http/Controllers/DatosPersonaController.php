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
        //dd($request);
         try{
            $datos = new DatosPersona;
            $datos->user_id = $request->user_id;
            $datos->user_apellido = $request->apellido;
            $datos->user_name = $request->nombre;
            $datos->user_dni = $request->dni;
           // $datos->imagen_dni = $request->file('files');
            

            Storage::makeDirectory($request->dni); //creo el directorio con el dni, para guardar las imagenes
            
            if ( $request->hasFile('imagen_dni') ){                     // para saber si cargo alguna imagen
                $img = $request->file('imagen_dni');                    //ṕara recorrer las img
                $rutas=[];                                               //array para las rutas
                if (is_array($img)){                                    //Si cargo array de imgagenes
                    foreach ($img as $contador=>$imagen) {             //recorro las cargadas
                        $nom=$imagen->getClientOriginalName();          //NO SE usa, pero toma el nombre cargado
                        $ext=$imagen->getClientOriginalExtension();     //captura la extension del archivo
                        $nombre = 'imagen_dni_'.$contador.'.'.$ext;       //concateno e invento los nombre
                        $rutas[]=$imagen->storeAs($request->dni,$nombre); //se guarda en la carpeta dni, con el nombre
                        $datos->imagen_dni = collect($rutas)->implode(', ');    //guardo las rutas separadas ,
                    }
                } 
                else                                                     // si cargo solo 1 img
                {
                    $nombre='imagen_dni.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->imagen_dni = $nombre;
                }
            }
          //  dd($rutas);

            if ( $request->hasFile('anses') ){     
                $img = $request->file('anses');
                $rutas=[]; 
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='certificado_anses-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->cert_anses = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='certificado_anses.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->cert_anses = $nombre;
                }
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
                $rutas=[]; 
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='certificado_discapacidad-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->certificado_discapacidad = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='certificado_discapacidad.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->certificado_discapacidad = $nombre;
                }
            }


            $datos->condicion_estudiante = $request->cond;

            if ($request->hasFile('constancia')){     
                $img = $request->file('constancia');
                $rutas=[]; 
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='constancia_estudiante-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->constancia_estudiante = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='constancia_estudiante.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->constancia_estudiante = $nombre;
                }
            }
        
            if ( $request->hasFile('certificado') ){     
                $img = $request->file('certificado'); 
                $rutas = [];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='certificado_estudiante-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->certificado_estudiante = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='certificado_estudiante.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->certificado_estudiante = $nombre;
                }
            }

            $datos->carrera_cursa = $request->carrera_cursa;
            $datos->anio_ingreso = $request->anioingreso;
            $datos->anio_cursado = $request->aniocursado;
            $datos->tiene_trabajo = $request->trabaja;
            $datos->tipo_trabajo = $request->actlab;

            if ( $request->hasFile('comping') ){     
                $img = $request->file('comping'); 
                $rutas = [];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='comprobante_ingresos-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->comprobante_ingresos = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='comprobante_ingresos.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->comprobante_ingresos = $nombre;
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
                $rutas =[]; 
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='recibo_alquiler-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->recibo_alquiler = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $ext = $img->getClientOriginalExtension();
                    $nombre='recibo_alquiler.'.$ext;
                    $img->storeAs($request->dni,$nombre);
                    $datos->recibo_alquiler = $nombre;
                }
            }

            $datos->monto_alq = $request->montoalq;
            $datos->usa_urbano = $request->urbano;
            $datos->cant_viajes = $request->cantviaja;
            $datos->usa_media_dist = $request->mediadist;
            $datos->cant_viaja_media = $request->cantviajamedia;
            
            //return response()->json($request);
            if ( $request->hasFile('recibopasaj') ){     
                $img = $request->file('recibopasaj'); 
                $rutas = [];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='recibo_pasaje-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->recibo_pasaje = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $ext = $img->getClientOriginalExtension();
                    $nombre='recibo_pasaje.'.$ext;
                    $img->storeAs($request->dni,$nombre);
                    $datos->recibo_pasaje = $nombre;
                }
            }

            $datos->precio_pasaje = $request->preciopasaje;
            $datos->es_propietario = $request->propietario;
            $datos->alquila = $request->alquila;

            if ( $request->hasFile('reciboalqfam') ){     
                $img = $request->file('reciboalqfam'); 
                $rutas=[];
                if(is_array($img)){ 
                    foreach ($img as $contador=>$imagen) {
                        $ext=$imagen->getClientOriginalExtension();
                        $nombre='recibo_alquiler_familiar-'.$contador.'.'.$ext;
                        $rutas[]=$imagen->storeAs($request->dni,$nombre);
                        $datos->recibo_alquiler_familiar = collect($rutas)->implode(', ');
                    }
                }
                else{
                    $nombre='recibo_alquiler_familiar.'.$img->getClientOriginalExtension();
                    $img->storeAs($request->dni,$nombre);
                    $datos->recibo_alquiler_familiar = $nombre;
                }
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

            for ($j=0;$j<count($request->consideraciones);$j++) {
                $con = new consideracione;
                $con->user_id = $request->user_id;
                $con->parentesco = $request->consideraciones[$j]['parentesco'];
                $con->enfermedad = $request->consideraciones[$j]['enfermedad'];
                $con->incapacidad = $request->consideraciones[$j]['incapacidad'];

                if ( $request->hasFile('consideraciones.*.imagen') ){     
                    $img = $request->file('consideraciones.*.imagen'); 
                    $rutas = [];
                    if(is_array($img)){ 
                        foreach ($img as $contador=>$imagen) {
                            $ext=$imagen->getClientOriginalExtension();
                            $nombre='imagen_discapacidad_familiar'.$j.'-'.$contador.'.'.$ext;
                            $rutas[]=$imagen->storeAs($request->dni,$nombre);
                            $con->cert_incapacidad = collect($rutas)->implode(', ');
                        }
                    }
                    else{
                        $ext=$img->getClientOriginalExtension();
                        $nombre='imagen_discapacidad_familiar'.$j.'.'.$ext;
                        $img->storeAs($request->dni,$nombre);
                        $con->cert_incapacidad = $nombre;
                        }
                }
                $con->save();
            
            }

            
            for($i=0;$i<count($request->familiar);$i++) {
                $fam = new familiar;
                $fam->user_id = $request->user_id;
                $fam->parentesco = $request->familiar[$i]['parentesco'];
                $fam->apeynom = $request->familiar[$i]['apeynom'];
                $fam->dni = $request->familiar[$i]['dnifam'];

                Storage::makeDirectory($request->dni."/familiar");
                 $ruta= $request->dni."/familiar";

                if ( $request->hasFile('familiar.*.imagen_dnifam') ){     
                    $img = $request->file('familiar.*.imagen_dnifam'); 
                    $rutas = [];
                    if(is_array($img)){ 
                        foreach ($img as $contador=>$imagen) {
                            $ext=$imagen->getClientOriginalExtension();
                            $nombre='imagen_dni_familiar'.$i.'-'.$contador.'.'.$ext;
                            $rutas[] =$imagen->storeAs($ruta,$nombre);
                            $fam->imagen_dni= collect($rutas)->implode(', ');
                        }
                    }
                    else{
                        $ext = $img->getClientOriginalExtension();
                        $nombre='imagen_dni_familiar-'.$i.'.'.$ext;
                        $img->storeAs($request->dni,$nombre);
                        $fam->imagen_dni = $nombre;
                        }
                }

                $fam->edad = $request->familiar[$i]['edadfam'];
                $fam->ocupacion = $request->familiar[$i]['ocupacionfam'];
                $fam->actividad_laboral = $request->familiar[$i]['actlab'];

                if ( $request->hasFile('familiar.*.comping') ){    // para saber 
                    $img = $request->file('familiar.*.comping');
                    $rutas=[];
                    if(is_array($img)){
                    foreach ($img as $contador=>$imagen) {
                        $ext = $imagen->getClientOriginalExtension();
                        $nombre = 'comprobante_ingresos_fam'.$contador.'-'.$i.'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->comprobante_ingresos =collect($rutas)->implode(', ');
                    }

                }
                else{
                      $ext = $img->getClientOriginalExtension();
                      $nombre = 'comprobante_ingresos_fam-'.$i.'.'.$ext;
                      $img->storeAs($ruta,$nombre); 
                      $fam->comprobante_ingresos=$nombre;
                  }
                }    

                $fam->ingresos = $request->familiar[$i]['ingresosfam'];

                if ( $request->hasFile('familiar.*.ansesfam') ){    // para saber 
                    $img = $request->file('familiar.*.ansesfam');
                    $rutas=[];
                    if(is_array($img)){
                    foreach ($img as $contador=>$imagen) {
                        $ext = $imagen->getClientOriginalExtension();
                        $nombre = 'comprobante_anses-'.$contador.'-'.$i.'.'.$ext;
                        $rutas[]=$imagen->storeAs($ruta,$nombre);
                        $fam->anses = collect($rutas)->implode(', ');
                    }

                }else
                {  
                      $ext = $img->getClientOriginalExtension();
                      $nombre = 'comprobante_anses-'.$i.'.'.$ext;
                      $img->storeAs($ruta,$nombre); 
                      $fam->anses=$nombre;
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
}

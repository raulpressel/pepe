<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\DatosPersona;
use Illuminate\Http\Request;
use App\Beca;
use App\User;

use DB;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CrearDatosPersona;
use Auth;


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
        $datos = DatosPersona::with(['user_name', 'user_id'])->get();
        $user = Auth::user(); 
        $carrera = DB::table('carreras')->get();
        
        
        return view('datospersona.index', compact('datos','user','carrera')) ;

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = DatosPersona::with(['user_name', 'user_id'])->get();
        $user = Auth::user();
        $carrera = DB::table('carreras')->get();
        return view ('datospersona.create', compact('datos', 'user', 'carrera'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearDatosPersona $request)
    {        
         try{
            $datos = new DatosPersona;
            $datos->user_id = $request->user_id;
            $datos->user_apellido = $request->apellido;
            $datos->user_name = $request->nombre;
            $datos->user_dni = $request->dni;
            $datos->imagen_dni = $request->imagen_dni;
            $datos->cuil = $request->cuil;
            $datos->estado_civil = $request->estcivil;
            $datos->cumple = $request->cumple;
            $datos->domicilio = $request->domi;
            $datos->ciudad = $request->ciudad;
            $datos->cp = $request->cp;
            $datos->provincia = $request->provincia;
            $datos->nacionalidad = $request->nacionalidad;
            $datos->cel = $request->cel;
            $datos->user_email = $request->email;
            $datos->face = $request->face;
            $datos->carrera_cursa = $request->carrera_cursa;
            $datos->anio_ingreso = $request->anioingreso;
            $datos->anio_cursado = $request->aniocursado;
            $datos->tiene_trabajo = $request->trabajo;
            $datos->sueldo = $request->sueldo;
            $datos->tiene_beca = $request->beca;
            $datos->tiene_pasantia = $request->pasan;
            $datos->tiene_asig = $request->asig;
            $datos->otros_ing = $request->otrosing;
            $datos->domi_cursado = $request->domicursa;
            $datos->casa_fam = $request->casafam;
            $datos->tiene_alq = $request->alq;
            $datos->monto_alq = $request->montoalq;
            $datos->usa_urbano = $request->urbano;
            $datos->cant_viajes = $request->cantviaja;
            $datos->usa_media_dist = $request->mediadist;
            $datos->precio_pasaje = $request->preciopasaje;
            $datos->cant_viaja_media = $request->cantviajamedia;
            $datos->es_propietario = $request->propietario;
            $datos->alquila = $request->alquila;
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
            /*
            $fam = new Familiar;


            $fam->parentesco = $request->
            $fam->apeynom = $request->
            $fam->dnifam = $request->
            $fam->imagen_dnifam = $request->
            $fam->edadfam = $request->
            $fam->ocupacionfam = $request->
            $fam->ingresosfam = $request->
            $fam->comprobanteingresosfam = $request->
            $fam->ansensfam = $request->

            $con = new Consideraciones;

            $con->parentesco
            $con->enfermedad
            $con->incapacidad
            $con->imagen
            */



        }catch (\Exception $e){
            return Redirect::to('/datospersona.create')->with('msg', ' Algo salio mal prueba de nuevo.');

        }



           /* if (auth()->check()) {
                auth()->user()->datos()->save($datos);
            }

            event(new MessageWasReceived($datos));
            */
        //esta forma sirve cuando sabemos que siempre tenemos un usario autenticado
        //auth()->user()->messages()->create($request->all());

        return redirect()->route('datospersona.create')->with('info', 'Hemos recibido tu inscripcion');
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
    public function edit(DatosPersona $datosPersona)
    {
        return view('datospersona.edit');
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
        //
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

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
        //$provincia = DB::table('provincias')->get();
        //$localidad = DB::table('localidades')->get();
        return view ('datospersona.create', compact('datos', 'user', 'carrera'));
        
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
            $datos->imagen_dni = $request->imagen_dni;
            $datos->cuil = $request->cuil;
            $datos->estado_civil = $request->estcivil;
            $datos->cumple = $request->cumple;
            $datos->domicilio = $request->domi;
            $datos->localidad = $request->localidad;
            $datos->provincia = $request->provincia;
            $datos->cp = $request->cp;
            $datos->nacionalidad = $request->nacionalidad;
            $datos->cel = $request->cel;
            $datos->user_email = $request->email;
            $datos->face = $request->face;
            $datos->carrera_cursa = $request->carrera_cursa;
            $datos->anio_ingreso = $request->anioingreso;
            $datos->anio_cursado = $request->aniocursado;
            $datos->tiene_trabajo = $request->trabaja;
            $datos->sueldo = $request->sueldo;
            $datos->tiene_beca = $request->beca;
            $datos->tiene_pasantia = $request->pasan;
            $datos->tiene_progresar = $request->progresar;
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

            $datos->save();

            for ($j=0;$j<count($request->consideraciones);$j++) {
                $con = new consideracione;
                $con->user_id = $request->user_id;
                $con->parentesco = $request->consideraciones[$j]['parentesco'];
                $con->enfermedad = $request->consideraciones[$j]['enfermedad'];
                $con->incapacidad = $request->consideraciones[$j]['incapacidad'];
                $con->cert_incapacidad = $request->consideraciones[$j]['imagen'];
                $con->save();
            }

            for($i=0;$i<count($request->familiar);$i++) {
                $fam = new familiar;
                $fam->user_id = $request->user_id;
                $fam->parentesco = $request->familiar[$i]['parentesco'];
                $fam->apeynom = $request->familiar[$i]['apeynom'];
                $fam->dni = $request->familiar[$i]['dnifam'];
                $fam->imagen_dni = $request->familiar[$i]['imagen_dnifam'];
                $fam->edad = $request->familiar[$i]['edadfam'];
                $fam->ocupacion = $request->familiar[$i]['ocupacionfam'];
                $fam->ingresos = $request->familiar[$i]['ingresosfam'];
                $fam->comprobante_ingresos = $request->familiar[$i]['comprobanteingresosfam'];
                $fam->anses = $request->familiar[$i]['ansesfam'];
                $fam->save();
            }

            
           
        }
        catch (\Exception $e){
            abort(404);//return redirect()->route('datospersona.index')->with('msg', ' Algo salio mal prueba de nuevo.');

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
    public function edit(DatosPersona $datosPersona)
    {
        /*

        $datos = DatosPersona::findOrFail($datosPersona->id);
        
        return view('datospersona.edit', compact('datos'));
        falta la vista...*/
    
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

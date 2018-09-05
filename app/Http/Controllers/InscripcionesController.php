<?php

namespace App\Http\Controllers;

use App\Inscripcione;
use App\User;
use App\DatosPersona;
use App\familiar;
use App\consideracione;
use Auth;
use PDF;
use View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;


use Illuminate\Support\Facades\Storage;

class InscripcionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
      
    use BreadRelationshipParser;
    /**
     * Display a listing of the resource.
     *
    
     */
    public function index(Request $request)
    {
    if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') or (Auth::user()->role_id == '4') ){ 

        $dato = DB::table('datos_personas')
        ->join('inscripciones', function ($join){
            $join->on('datos_personas.user_id','=','inscripciones.user_id');
        })->get()->toArray(); // devuelvo todos los datos_personas inscriptos
        

        $inscrip = DB::table('inscripciones')
        ->join('users', function ($join) 
            {
                $join->on('inscripciones.user_id','=','users.id');
            })
        ->get();//Devuelvo los que estan inscriptos y son usuarios

        $becas = DB::table('becas')->orderBy('habilitada','desc')->get();


       //dd($dato,$inscrip);
   /*

        $dato = DatosPersona::with(['user_name', 'user_id'])->get();
        $user = Auth::user(); 
        $carrera = DB::table('carreras')->get();
  */   
        
        return view('vendor.voyager.inscripciones.listar', compact('inscrip','dato','becas'));
    }
    else{
        return view('errors.404');
    
    }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        $dataTypeContent = (strlen($dataType->model_name) != 0)
                            ? new $dataType->model_name()
                            : false;

        foreach ($dataType->addRows as $key => $row) {
            $details = json_decode($row->details);
            $dataType->addRows[$key]['col_width'] = isset($details->width) ? $details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'add');

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'voyager::bread.edit-add';

        if (view()->exists("voyager::$slug.edit-add")) {
            $view = "voyager::$slug.edit-add";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('edit', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

            return redirect()
                ->route("voyager.dashboard")
                ->with([
                        'message'    => __('voyager.generic.successfully_added_new')." {$dataType->display_name_singular}",
                        'alert-type' => 'success',
                    ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        $relationships = $this->getRelationships($dataType);
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);
            $dataTypeContent = call_user_func([$model->with($relationships), 'findOrFail'], $id);
        } else {
            // If Model doest exist, get data from table name
            $dataTypeContent = DB::table($dataType->name)->where('id', $id)->first();
        }

        // Replace relationships' keys for labels and create READ links if a slug is provided.
        $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType, true);

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'read');

        // Check permission
        $this->authorize('read', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'voyager::bread.read';

        if (view()->exists("voyager::$slug.read")) {
            $view = "voyager::$slug.read";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function generarPdf(Request $request){
    if($request->pdf == "Si"){
        $inscrip = DB::table('inscripciones')->join('becas', 'inscripciones.beca_id', '=', 'becas.id')->where('inscripciones.otorgamiento', 'Si')->get(); /*mismas becas*/
        //dd($inscrip);
        
         $pdf = PDF::loadView('vendor.voyager.inscripciones.pdfview',['inscrip'=>$inscrip/*, 'user'=>$user*/]);
   
        return $pdf->download('pepe.pdf');
        }
        elseif ($request->pdf == "No") {
            $inscrip = DB::table('inscripciones')->join('becas', 'inscripciones.beca_id', '=', 'becas.id')->where('inscripciones.otorgamiento', 'No')->get(); /*mismas becas*/
        //dd($inscrip);
        

         $pdf = PDF::loadView('vendor.voyager.inscripciones.pdfview',['inscrip'=>$inscrip/*, 'user'=>$user*/]);
   
        return $pdf->download('pepe.pdf');
        
            
        }elseif($request->pdf == "Todos"){
            $inscrip = DB::table('inscripciones')->join('becas', 'inscripciones.beca_id', '=', 'becas.id')->get(); /*mismas becas*/
        //dd($inscrip);
        

         $pdf = PDF::loadView('vendor.voyager.inscripciones.pdfview',['inscrip'=>$inscrip/*, 'user'=>$user*/]);
   
        return $pdf->download('pepe.pdf');

        }elseif ($request->pdf == "Suspendida") {
            $inscrip = DB::table('inscripciones')->join('becas', 'inscripciones.beca_id', '=', 'becas.id')->where('inscripciones.otorgamiento', 'Suspendida')->get(); /*mismas becas*/
        //dd($inscrip);
        

         $pdf = PDF::loadView('vendor.voyager.inscripciones.pdfview',['inscrip'=>$inscrip/*, 'user'=>$user*/]);
   
        return $pdf->download('pepe.pdf');


        }else{
                    return view('errors.404');

        }

}
    
    public function seleccion(Request $request)
    {
        
    if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') or (Auth::user()->role_id == '4') ){ 

        $inscrip = DB::table('inscripciones')->join('users', function ($join)
        {
            $join->on('inscripciones.user_id','=','users.id');
        })->where('beca_id','=',$request->beca)->orderBy('inscripciones.merito','desc')->get();//->paginate(3);

        $aux = DB::table('becas')->where('id','=',$request->beca)->select('nombre')->first(); //busco el nombre de la beca
        $aux1 = DB::table('datos_personas')->where('beca_id',$request->beca)->get();//->paginate(3);
       // dd($inscrip, $aux);
        //dd($aux);


        return view::make('vendor.voyager.inscripciones.seleccion', compact('inscrip','aux','aux1'));
    }    
    else{
        return view('errors.404');
    
    }

 
    }

    public function datos_usuario(Request $request, $user_id){
        if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') or (Auth::user()->role_id == '4') ){ 



        $datos = DB::table('datos_personas')->where('user_id','=',$user_id)->first();
        $condicion = DB::table('condicion')->get();
        $familiar=DB::table('familiars')->where('user_id',$user_id)->get();
        $consideraciones=DB::table('consideraciones')->where('user_id',$user_id)->get();


        return view('vendor.voyager.inscripciones.usuario.datos_usuario', compact('datos','condicion','familiar','consideraciones'));
            }
            else{
        return view('errors.404');
    
    }
    }


    public function getFile($filename)
    {  //No quedo andando esto? 

     return response()->download(storage_path($filename), null, [], null);
    }
  


    public function se_inscribio(){

        
        $user = Auth::user();;
       
        $datos_beca = DB::table('inscripciones')
        //->join('datos_personas',  'inscripciones.user_id', '=', 'datos_personas.user_id')/*datosp en insc*/
        ->join('becas', 'inscripciones.beca_id', '=', 'becas.id') /*mismas becas*/
        //->join('cronogramas', 'becas.id', '=', 'cronogramas.beca_id')/*cronograma de becas*/
        ->where('inscripciones.user_id', '=', $user->id)
        //->select('becas.nombre', 'inscripciones.otorgamiento','becas.anio'/*'cronogramas,.fecha_1', 'cronogramas.fecha_2', 'cronogramas.fecha_3', 'cronogramas.fecha_4', 'cronogramas.fecha_5', 'cronogramas.fecha_6', 'cronogramas.fecha_6', 'cronogramas.fecha_7', 'cronogramas.fecha_8','cronogramas.beca_id' /*'datos_personas.user_name'*/)
        ->get();

       // dd($datos_beca);
        return $datos_beca;//redirect('administracion', compact('dato', $datos_beca));
        }


    public function revision($id){
        $user = Auth::user();
        $datos_personas = DB::table('datos_personas')->where('user_id', $id)->select('revision','beca_id')->get(); 
       // dd($datos_personas);
        return $datos_personas;
        }


    public function carga(Request $request){
       //dd($request);

        try {

            $datos = DatosPersona::where('user_id',$request->id)->first();
            $fam = Familiar::where('user_id',$request->id)->get();
            $con = Consideracione::where('user_id',$request->id)->get();
           
            if ($datos != null) {
            
            if ($request->accion == "acepta") {
                if ($request->band==0) {
                    $ms="ERROR! Si los datos no estan chequeados no se puede aceptar el usuario";
                    } else{
                         $datos->revision = 1;
                         $datos->band = $request->band; //correcto o no correcto
                         $datos->save();
                         $ms = "Usuario postulado para la beca";
                     }
                 } else
                  if($request->accion == "modifica"){
                    $datos->band = $request->band; //correcto o no correcto
                    $datos->revision = 1;
                    $ms = "Usuario modificado y guardado con exito";
                    /*Guardar todos los input*/
                   // dd($request);



                    $datos->user_apellido = $request->apellido;
                    //$datos->user_name = $request->nombre;
                    $datos->user_dni = $request->dni;
                    $datos->estado_civil = $request->estcivil;
                    $datos->cumple = $request->cumple;
                    $datos->domicilio = $request->domi;
                    //$datos->provincia = $request->provincia; falta q lo deje modificar para que llege como request y guardar
                    //$datos->localidad = $request->localidad; falta q lo deje modificar para que llege como request y guardar
                    //$datos->cp = $request->cp; falta q lo deje modificar para que llege como request y guardar
                    //$datos->nacionalidad = $request->nacionalidad; falta q lo deje modificar para que llege como request y guardar
                    $datos->cel = $request->cel;
                    $datos->user_email = $request->email;
                    $datos->face = $request->face;
                    $datos->disca_estudiante = $request->discaest;
                    $datos->condicion_estudiante = $request->cond;
                    //$datos->carrera_cursa = $request->carrera_cursa; falta q lo deje modificar para que llege como request y guardar
                    $datos->anio_ingreso = $request->anioingreso;
                  //  $datos->anio_cursado = $request->aniocursado; falta q lo deje modificar para que llege como request y guardar
                    $datos->tiene_trabajo = $request->trabaja;
                    $datos->tipo_trabajo = $request->actlab;
                    $datos->sueldo = $request->sueldo;
                    $datos->tiene_beca = $request->beca;
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
                    $datos->cant_viaja_media = $request->cantviajamedia;
                    $datos->precio_pasaje = $request->preciopasaje;
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
                    //$datos->motivos = $request->motivos; falta q lo deje modificar para que llege como request y guardar
                    $datos->save();
/*
                    if ($con != null){
            
                    for ($k=0;$k<count($request->consideraciones);$k++) {
                    $con->user_id = $request->user_id;
                    $con->parentesco = $request->consideraciones[$k]['parentesco'];
                    $con->enfermedad = $request->consideraciones[$k]['enfermedad'];
                    $con->incapacidad = $request->consideraciones[$k]['incapacidad'];
                    dd($con);
                    $con->save();
                    }
                    }

                    if ($fam != null){                
                    for($l=0;$l<count($request->familiar);$l++) {
                    $fam->user_id = $request->user_id;
                    $fam->parentesco = $request->familiar[$l]['parentesco'];
                    $fam->apeynom = $request->familiar[$l]['apeynom'];
                    $fam->dni = $request->familiar[$l]['dnifam'];
                    $fam->edad = $request->familiar[$l]['edadfam'];
                    $fam->ocupacion = $request->familiar[$l]['ocupacionfam'];
                    $fam->actividad_laboral = $request->familiar[$l]['actlab'];
                    $fam->ingresos = $request->familiar[$l]['ingresosfam'];
                    $fam->save();
                    }
                    }

*/
////hasta aca inputs




                }else
                 if($request->accion=="borra"){
                    $datos = DatosPersona::where('user_id',$request->id)->first();
                    $fam = Familiar::where('user_id',$request->id)->get();
                    $con = Consideracione::where('user_id',$request->id)->get();
                    $datos->delete();
                    $fam->delete();
                    $con->delete();
          
                    $ms = "Datos de inscripcion del usuario borrado con exito";
                }else
                {echo $ms="Ninguna seleccion";}
            }
            
        return redirect('/administracion/inscripciones')->with('message', $ms);//
        }
        catch (Exception $e) {
            return redirect('administracion/inscripciones')->with('message','Error en la accion con el usuario');
        }

    }


    public function observacion (Request $request, $user_id){
        if( (Auth::user()->role_id == '1') or (Auth::user()->role_id == '3') or (Auth::user()->role_id == '4') ){ 

    
        $inscrip = DB::table('inscripciones')->where('user_id', $user_id)->first();
//        dd($inscrip);     
        return view('vendor.voyager.inscripciones.observacion',compact('inscrip'));
    } 
       else{
        return view('errors.404');
    }
    
    }


    public function guarda_observacion (Request $request){
   //dd($request->user_id);
        if($request->obs_new == NULL & $request->meritos_new==NULL & $request->otorgamiento == NULL){
            return redirect('/administracion/inscripciones')->with('message','No escribiste ninguna modificacion');


            }
        else{
            try {
                $inscrip=\App\Inscripcione::findorfail($request->id)->first();
                //$inscrip=DB::table('inscripcion')->where('user_id',$request->user_id)->first();    
               // dd($inscrip);

                $inscrip->observacion = $request->obs_new;
                $inscrip->merito = $request->meritos_new;    
                $inscrip->otorgamiento = $request->otorgamiento;         
                $inscrip->save();
                return redirect('/administracion/inscripciones')->with('message','Se guardaron los cambios de la observacion');
            }
            catch(Exception $e){
                echo $e->getMessage();
                return redirect('/administracion/inscripciones')->with('message','Error no se guardaron los cambios de la observacion');
            }
        }
    }


    public function otorgar(Request $request){
        $datos_beca = DB::table('inscripciones')
        ->join('becas', 'inscripciones.beca_id', '=', 'becas.id') /*mismas becas*/
        ->where('inscripciones.beca_id', '=', $request->beca_id)->orderBy('inscripciones.merito','desc')->get();
        //dd($datos_beca);
     if ($datos_beca == null){
        return redirect('/administracion/inscripciones')->with('message','No se pudo otorgar beca');
    
     }else{
        foreach ($datos_beca as $datos) {//otorgamiento segun meritos obtenido y cant cargada
            if($datos_beca->count()<$request->cant_otor){
                return redirect('/administracion/inscripciones')->with('message','Mucha cantidad de becas para pocos postulantes');

            }else{
            if ($request->cant_otor > 0) {
                //$d2=DB::table('inscripciones')->where('user_id','=',$datos->user_id)-first();

                $inscrip=DB::Table('inscripciones')->where('user_id','=',$datos->user_id)->update(['otorgamiento'=>'Si', 'observacion'=>'Alta por otorgamiento']);
                $request->cant_otor = $request->cant_otor-1;
            }
            }
        }
        return redirect('/administracion/inscripciones')->with('message','See otorgaron las becas a los postulados');
    }
}



    public function dar_baja_inscripcion(Request $request, $id){
       // dd($request);
     $inscrip=DB::table('inscripciones')->where('user_id',$id);
    //if($request->ajax()){
     $inscrip->delete();
      //  return response()->json(['msg' =>'Borrado!', 'status'=>'success']);
    return redirect('/administracion/inscripciones')->with('message','Inscripcon borrada');
    /* }
     return response()->json(['msg' =>'Borrado!', 'status'=>'success']);
    //Response()->json(array('success' =>true,'message' =>'Borrado!'));
    */}   







    }

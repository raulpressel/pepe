<?php

namespace App\Http\Controllers;

use App\Inscripcione;
use App\User;
use App\DatosPersona;

use PDF;
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

        $becas = DB::table('becas')->get();


       //dd($dato,$inscrip);
   /*

        $dato = DatosPersona::with(['user_name', 'user_id'])->get();
        $user = Auth::user(); 
        $carrera = DB::table('carreras')->get();
  */   
        
        return view('vendor.voyager.inscripciones.listar', compact('inscrip','dato','becas'));

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
public function edit(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        $relationships = $this->getRelationships($dataType);

        $dataTypeContent = (strlen($dataType->model_name) != 0)
            ? app($dataType->model_name)->with($relationships)->findOrFail($id)
            : DB::table($dataType->name)->where('id', $id)->first(); // If Model doest exist, get data from table name

        foreach ($dataType->editRows as $key => $row) {
            $details = json_decode($row->details);
            $dataType->editRows[$key]['col_width'] = isset($details->width) ? $details->width : 100;
        }

        // If a column has a relationship associated with it, we do not want to show that field
        $this->removeRelationshipField($dataType, 'edit');

        // Check permission
        $this->authorize('edit', $dataTypeContent);

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($dataTypeContent);

        $view = 'voyager::bread.edit-add';

        if (view()->exists("voyager::$slug.edit-add")) {
            $view = "voyager::$slug.edit-add";
        }

        return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id)
    {
         $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

        // Check permission
        $this->authorize('edit', $data);

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->editRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $this->insertUpdateData($request, $slug, $dataType->editRows, $data);

            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                    'message'    => __('voyager.generic.successfully_updated')." {$dataType->display_name_singular}",
                    'alert-type' => 'success',
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('delete', app($dataType->model_name));

        // Init array of IDs
        $ids = [];
        if (empty($id)) {
            // Bulk delete, get IDs from POST
            $ids = explode(',', $request->ids);
        } else {
            // Single item delete, get ID from URL
            $ids[] = $id;
        }
        foreach ($ids as $id) {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
            $this->cleanup($dataType, $data);
        }

        $displayName = count($ids) > 1 ? $dataType->display_name_plural : $dataType->display_name_singular;

        $data = $data->destroy($ids)
            ? [
                'message'    => __('voyager.generic.successfully_deleted')." {$displayName}",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager.generic.error_deleting')." {$displayName}",
                'alert-type' => 'error',
            ];

        return redirect()->route("voyager.{$dataType->slug}.index")->with($data);
    }
protected function cleanup($dataType, $data)
    {
        // Delete Translations, if present
        if (is_bread_translatable($data)) {
            $data->deleteAttributeTranslations($data->getTranslatableAttributes());
        }

        // Delete Images
        $this->deleteBreadImages($data, $dataType->deleteRows->where('type', 'image'));

        // Delete Files
        foreach ($dataType->deleteRows->where('type', 'file') as $row) {
            foreach (json_decode($data->{$row->field}) as $file) {
                $this->deleteFileIfExists($file->download_link);
            }
        }
    }

    /**
     * Delete all images related to a BREAD item.
     *
     * @param \Illuminate\Database\Eloquent\Model $data
     * @param \Illuminate\Database\Eloquent\Model $rows
     *
     * @return void
     */
    public function deleteBreadImages($data, $rows)
    {
        foreach ($rows as $row) {
            $this->deleteFileIfExists($data->{$row->field});

            $options = json_decode($row->details);

            if (isset($options->thumbnails)) {
                foreach ($options->thumbnails as $thumbnail) {
                    $ext = explode('.', $data->{$row->field});
                    $extension = '.'.$ext[count($ext) - 1];

                    $path = str_replace($extension, '', $data->{$row->field});

                    $thumb_name = $thumbnail->name;

                    $this->deleteFileIfExists($path.'-'.$thumb_name.$extension);
                }
            }
        }
    }




    public function pdf(Request $request){

       //return response()->json($request);
      //  dd($request);

        $inscrip = DB::table('inscripciones')->where('user_id','=',$request->listado)->get();

       // $user = DB::table('datos_personas')->where('user_id',$request->listado)->get();
        
         //dd($inscrip);
         $pdf = PDF::loadView('vendor.voyager.inscripciones.pdfview',['inscrip'=>$inscrip/*, 'user'=>$user*/]);
   
        return $pdf->download('pepe.pdf');


}


    public function seleccion(Request $request){
        //dd($request);
      



        $inscrip = DB::table('inscripciones')->join('users', function ($join)
        {
            $join->on('inscripciones.user_id','=','users.id');
        })->where('beca_id','=',$request->beca)/*->simplepaginate(8);*/->get();


        //en la vista... {{ $inscrip->appends(request()->input())->render() }}         
      //  $inscrip->withPath('')->setPath('');


        $aux = DB::table('becas')->where('id','=',$request->beca)->select('nombre')->first(); //busco el nombre de la beca

       // dd($inscrip, $aux);
        //dd($aux);


        return view('vendor.voyager.inscripciones.seleccion', compact('inscrip','aux'));
 
    }

    public function datos_usuario(Request $request, $user_id){

        $datos = DB::table('datos_personas')->where('user_id','=',$user_id)->first();
        $condicion = DB::table('condicion')->get();
        $familiar=DB::table('familiars')->where('user_id',$user_id)->get();
        $consideraciones=DB::table('consideraciones')->where('user_id',$user_id)->get();


        return view('vendor.voyager.inscripciones.usuario.datos_usuario', compact('datos','condicion','familiar','consideraciones'));
    }


    public function getFile($filename)
    {  //No quedo andando esto? 

     return response()->download(storage_path($filename), null, [], null);
    }
  


    public function se_inscribio($id){
        $user = User::find($id);
        //dd($id_user->id);
        
        /*
        $inscripcion = DB::table('inscripciones')->where('user_id', $user->id)->select('beca_id')->orderBy('created_at')->first();
        //$datos_beca = DB::table('becas')->where('id', $inscripcion)->get(); //devuelvo el primero que encuentra

         //devuelvo el primero que encuentra
       // $inscripcion = DB::table('inscripciones')->where('user_id', $datos->user_id)->get();
        dd($inscripcion->beca_id);
        //InscripcionesController::nombre_beca($inscripcion);
        return $inscripcion;
        */
        $datos_beca = DB::table('inscripciones')
        ->join('datos_personas', 'inscripciones.user_id', '=', 'datos_personas.user_id')
        ->join('becas', 'inscripciones.beca_id', '=', 'becas.id')
        ->join('cronogramas', 'becas.id', '=', 'cronogramas.beca_id')
        ->select('becas.nombre', 'becas.anio', 'datos_personas.revision','inscripciones.otorgamiento','cronogramas.fecha_1', 'cronogramas.fecha_2', 'cronogramas.fecha_3', 'cronogramas.fecha_4', 'cronogramas.fecha_5', 'cronogramas.fecha_6', 'cronogramas.fecha_6', 'cronogramas.fecha_7', 'cronogramas.fecha_8','cronogramas.beca_id' /*'datos_personas.user_name'*/)
        ->get();
        //dd($datos_beca->toJson());
        return $datos_beca;
        }


    public function nombre_beca($id){
        $datos_beca = DB::table('becas')->where('id', $id)->get(); //devuelvo el primero que encuentra

        //dd($datos_beca);
        return $datos_beca;
        }





    }

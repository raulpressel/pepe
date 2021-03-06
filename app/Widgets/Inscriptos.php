<?php

namespace App\Widgets;
use App\Inscripcione;
use Illuminate\Support\Facades\Auth;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use DB;




class Inscriptos extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //$count = \App\Inscripcione::count();
        $count = DB::table('inscripciones')
        ->join('datos_personas', 'inscripciones.user_id','=','datos_personas.user_id')
        ->join('becas','datos_personas.beca_id','=','becas.id')->where('becas.habilitada','=','Si')
        ->count();//cuento la cantidad de inscriptos en la beca habilitada


        $count_sin_revisar = DB::table('datos_personas')
        ->join('inscripciones', 'datos_personas.user_id','=','inscripciones.user_id')
        ->join('becas','datos_personas.beca_id','=','becas.id')->where('datos_personas.revision','=','0')->where('becas.habilitada','=','Si')
        ->count();//cuento la cantidad de inscriptos en la beca habilitada

        //dd($count_sin_revisar);


        $string = 'Postulado en la beca habilitada';
      //  dd($count);

        if ($count == 0) {
            $string = 'No se posee ninguna beca habilitada';
            $text_aux = "Recuerda, que debes tener 1 sola beca habilitada";
            $title_aux= "{$string}";
            $buton_text="Ver listado de becas";
        }else{
            $string = "Postulado en la beca habilitada";
            $text_aux = "Actualmente tienes {$count} {$string} Haga clic en el botón de abajo para verlos.<br><font size=\"3\" color=\"red\"><strong>  {$count_sin_revisar} Inscriptos por revisar</strong></font>";
            $title_aux="{$count} {$string}";
            $buton_text="Ver los postulados";
        }

       
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-study',
            'title'  => "{$title_aux}",
            'text'   => "{$text_aux}",
            ////__('voyager.dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "{$buton_text}",
                'link' => route('voyager.inscripciones.index'),
            ],
            'image' => 'img/uader-widg.jpg',
        ]));
    }
       public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }

}

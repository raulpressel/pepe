<?php

namespace App\Widgets;
use App\Inscripcione;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

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
        $count = \App\Inscripcione::count();
        $string = 'Inscriptos';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-study',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Ver todos los inscriptos',
                'link' => route('voyager.inscripciones.index'),
            ],
            'image' => 'img/uader-widg.jpg',
        ]));
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersona extends Model
{
    protected $primarykey = 'id';

    protected $filiable = ['name','dni','apellido','carrera_cursa'];
    /* public function __construct() {
        $this->middleware('auth');
        $this->middleware('log', ['only' => ['store', 'update', 'destroy']]);
    }
	
     public function beca()
	{
		return $this->belongsTo(Beca::class);
	}*/

     public function user_id()
    {
        return $this->belongsTo(User::class);
    }

    public function user_name()
    {
        return $this->belongsTo(User::class);
    }
}



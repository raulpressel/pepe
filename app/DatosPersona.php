<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersona extends Model
{
    protected $primarykey = 'id';
    /* public function __construct() {
        $this->middleware('auth');
        $this->middleware('log', ['only' => ['store', 'update', 'destroy']]);
    }
	
     public function beca()
	{
		return $this->belongsTo(Beca::class);
	}*/

     public function id()
    {
        return $this->hasMany(User::class);
    }
}



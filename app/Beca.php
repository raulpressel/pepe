<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Beca extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];
    /*
    public function datospersona()
	{
		return $this->hasMany(DatosPersona::class);
	}*/
}
	
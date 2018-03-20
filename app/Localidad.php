<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';

    protected $fillable = ['id', 'localidad'];

	/*public function provincia()
	{
		 return $this->belongsTo('provincias');
	} */

	public static function localidades($id)
	{
		return Localidad::where('id_privincia', '=', $id)->get();
	}
}

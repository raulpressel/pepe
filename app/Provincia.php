<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //



	protected $table = 'provincias';

	protected $fillable = ['id', 'provincia'];	

/*/	public function localidades()
	{
		 return $this->hasMany('localidades');
	}
*/

}
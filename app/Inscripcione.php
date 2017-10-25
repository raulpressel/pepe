<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Inscripcione extends Model
{
	    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->user_id  && Auth::user()) {
            $this->user_id = Auth::user()->id;
           $this->user_nombre = Auth::user()->name;
        }

         parent::save();

    }
     public function user_id()
    {
        return $this->belongsTo(User::class);
    }

 
}

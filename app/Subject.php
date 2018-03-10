<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function course() {
    	
    	return $this->belongsTo('App\Course');
    }
    public function assigns() {

    	return $this->hasMany('App\Assign');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function campus() {
    	
    	return $this->belongsTo('App\Campus');
    }
    public function assigns() {
    	return $this->hasMany('App\Assign');
    }
}

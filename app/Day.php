<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function assigns() {
    	return $this->hasMany('App\Assign');
    }
}

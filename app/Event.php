<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeSearch($query, $search){
    	return $query->where('title','like','%'.$search.'%')
    		    ->orWhere('description','like','%'.$search.'%');
    }
    public function campus() {
    	return $this->belongsTo('App\Campus');
    }
    
}

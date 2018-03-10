<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';
	
 
    public function classrooms() {
        return $this->hasMany('App\Classroom');
    }

    public function subjects() {
    	return $this->hasMany('App\Subject');
    }

    public function students() {
    	return $this->hasMany('App\Students');
    }
 
}

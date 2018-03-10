<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Assign extends Model
{

	public function classroom() {
		return $this->belongsTo('App\Classroom');
	}

    public function professor() {
    	return $this->belongsTo('App\Professor');
    }

    public function subject() {
    	return $this->belongsTo('App\Subject');
    }

    public function room() {
        return $this->belongsTo('App\Room');
    }

    public function fileuploads() {
        return $this->hasMany('App\FileUpload');
    }

    public function students() {
        return $this->belongsToMany('App\Student')->withPivot('grade');
    }

    public function day() {
        return $this->belongsTo('App\Day');
    }  
}

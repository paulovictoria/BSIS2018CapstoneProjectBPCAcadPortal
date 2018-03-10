<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
	
    public function admins() {
    	return $this->hasMany('App\Admin');
    }

    public function registrars() {
    	return $this->hasMany('App\Registrar');
    }

    public function professors() {
    	return $this->hasMany('App\Professor');
    }

    public function students() {
    	return $this->hasMany('App\Student');
    }  

    public function rooms() {
        return $this->hasMany('App\Room');
    }

    public function announcements() {
        return $this->hasMany('App\Announcement');
    }  

    public function events() {
        return $this->hasMany('App\events');
    }

    public function news() {
        return $this->hasMany('App\News');
    }

 
}

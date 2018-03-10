<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	    use Notifiable;
    //admin
    protected $guard = 'student';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sid','last_name','first_name','midle_name','gender', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
    public function classrooms() {
        return $this->belongsToMany('App\Classroom','classroom_student');
    }

    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function grades() {
        return $this->hasMany('App\Grade');
    }

    public function campus() {
        return $this->belongsTo('App\Campus');
    }




}

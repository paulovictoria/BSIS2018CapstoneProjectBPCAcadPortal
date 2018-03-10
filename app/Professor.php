<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ProfessorResetPasswordNotification;

class Professor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'professor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eid','last_name','first_name','midle_name','gender', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function assigns(){

		return $this->hasMany('App\Assign');
	}	

    public function campus() {
        return $this->belongsTo('App\Campus');
    } 

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ProfessorResetPasswordNotification($token));
    }         

}

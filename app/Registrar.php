<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\RegistrarResetPasswordNotification;
class Registrar extends Authenticatable
{
	    use Notifiable;
    //admin
    protected $guard = 'registrar';
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

    public function campus() {
        return $this->belongsTo('App\Campus');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new RegistrarResetPasswordNotification($token));
    }        
	

}


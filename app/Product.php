<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['sid','LastName','FirstName','MidleName'];

 public function classrooms() {
        return $this->belongsToMany('App\Classroom','classroom_product');
    }

}
 
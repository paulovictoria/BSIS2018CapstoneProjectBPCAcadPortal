<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = "fileuploads";

    public function assign() {
    	return $this->belongsTo('App\Assign');
    }
}

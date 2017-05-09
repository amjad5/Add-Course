<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function sections()
    { 
        return $this->belongsTo('App\Section');
    }
    
}

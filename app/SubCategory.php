<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Category');
    }
}

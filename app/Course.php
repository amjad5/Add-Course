<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function course()
    {
        return $this->belongsTo('App\SubCategory');
    }
    
    
    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    protected $fillable = ['category', 'subcategory', 'course', 'lecture', 'section'];
}

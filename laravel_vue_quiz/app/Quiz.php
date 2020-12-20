<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function answer()
    {
        return $this->hasOne('App\Answer');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

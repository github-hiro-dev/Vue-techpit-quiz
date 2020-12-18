<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keywords';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

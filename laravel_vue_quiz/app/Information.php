<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    protected $table = 'informations';

    public function getCreatedAtAttribute($data)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('Y/m/d');
    }
}

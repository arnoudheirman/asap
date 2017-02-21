<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connotation extends Model
{
    //
    public function assessment()
    {
        return $this->belongsTo('App\Assessment');
    }
}

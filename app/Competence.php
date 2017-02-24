<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //
    public function levels()
    {
        return $this->hasMany('App\Level');
    }
    public function assessments()
    {
        return $this->hasMany('App\Assessment');
    }
}

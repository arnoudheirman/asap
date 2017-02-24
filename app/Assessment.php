<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //
    public function competences()
    {
        return $this->belongsTo('App\Competence');
    }


    public function levels()
    {
        return $this->belongsTo('App\Level');
    }

    public function connotation()
    {
        return $this->hasOne('App\Connotation');
    }

}

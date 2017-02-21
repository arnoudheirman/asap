<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    //
    public function competences()
    {
        return $this->belongsToMany('App\Competence');
    }

    public function connotation()
    {
        return $this->belongsTo('App\Connotation');
    }

}

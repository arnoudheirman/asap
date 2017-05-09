<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QueryFilter;

class Assessment extends Model
{
    //
    
    public function scopeFilter($query, QueryFilter $filters){
        return $filters->apply($query);
    }
    
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

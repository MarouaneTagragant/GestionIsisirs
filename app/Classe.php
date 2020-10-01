<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classe extends Model
{
    use SoftDeletes;
    
    
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
    
    public function niveau()
    {
        return $this->belongsTo('App\Niveau');
    }

    /**
     * The classe that belong to the student.
     */
    public function student()
    {
        return $this->belongsToMany('App\User');
    }

    public function professeur()
    {
        return $this->belongsToMany('App\User');
    }

    
}

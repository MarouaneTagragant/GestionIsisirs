<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Niveau extends Model
{
    //
    use SoftDeletes;

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function classe()
    {
        return $this->hasMany('App\Classe');
    }
}

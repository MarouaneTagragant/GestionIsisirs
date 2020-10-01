<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Section extends Model
{
    //
    use SoftDeletes;

    public function niveau(){
        return $this->hasMany('App\Niveau');
    }

    public function classe()
    {
        return $this->hasMany('App\Classe');
    }


}

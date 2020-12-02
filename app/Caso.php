<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public function secuencias()
    {
        return $this->hasMany('App\Secuencia');
    }
}

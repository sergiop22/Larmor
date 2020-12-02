<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secuencia extends Model
{
    public function caso()
    {
        return $this->belongsTo('App\Caso');
    }
}

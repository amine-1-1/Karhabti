<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Car');
    }
}

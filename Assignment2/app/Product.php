<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    function product(){
        return $this->hasMany('App\Product');
    }
}

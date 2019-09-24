<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    function product(){
        return $this->hasMany('App\Orders');
    }
}

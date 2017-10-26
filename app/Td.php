<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = false;
    
    public function Tournament(){
        return $this->hasMany('App\Tournament');
    
    }
}

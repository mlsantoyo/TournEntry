<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = false;
    
    // public function user(){
    //      return $this->belongsTo('App\User');

    public function td(){
         return $this->belongsTo('App\Td');
    }

    public function entry(){
        return $this->belongsTo('App\User');
   }
}

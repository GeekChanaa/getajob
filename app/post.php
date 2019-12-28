<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //Relationships
    public function comments(){
      return $this->hasMany('App\comment');
    }

    //User
    public function user(){
      return $this->belongsTo('App\User');
    }
}

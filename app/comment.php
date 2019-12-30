<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  //Relationships
  public function replies(){
    return $this->hasMany('App\reply');
  }
  
    //User
    public function user(){
      return $this->belongsTo('App\User');
    }
}

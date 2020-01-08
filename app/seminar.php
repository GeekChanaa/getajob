<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
  //User
  public function user(){
    return $this->belongsTo('App\User');
  }
}

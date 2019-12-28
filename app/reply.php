<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
  //Relationships
  public function replies(){
    return $this->hasMany('App\reply');
  }
}

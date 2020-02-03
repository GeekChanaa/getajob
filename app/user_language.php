<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_language extends Model
{
  public function language(){
    return $this->belongsTo('App\language');
  }
}

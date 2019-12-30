<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{


  // Reply
  public function user(){
    return $this->belongsTo('App\User');
  }
}

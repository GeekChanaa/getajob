<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //User
    public function user(){
      return $this->belongsTo('App\User');
    }
}

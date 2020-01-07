<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_like extends Model
{
    //User
    public function user(){
      return $this->belongsTo('App\User');
    }

    //User
    public function post(){
      return $this->belongsTo('App\post');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\post_like;
use auth;

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

    

    //Number of likes
    public function likes(){
      return $this->hasMany('App\post_like');
    }

    // true
    public function like(){
      return true;

    }


}

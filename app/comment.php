<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  //Relationships
  public function replies(){
    return $this->hasMany('App\reply');
  }

  public function likesCount()
  {
      return $this->hasOne('App\comment_like')
          ->selectRaw('comment_id, count(*) as total')
          ->groupBy('comment_id');
  }

  public function repliesCount()
  {
      return $this->hasOne('App\reply')
          ->selectRaw('comment_id, count(*) as total')
          ->groupBy('comment_id');
  }
    //User
    public function user(){
      return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{


    // Reply
    public function user(){
      return $this->belongsTo('App\User');
    }

    // like count
    public function likesCount()
    {
        return $this->hasOne('App\reply_like')
            ->selectRaw('reply_id, count(*) as total')
            ->groupBy('reply_id');
    }
}

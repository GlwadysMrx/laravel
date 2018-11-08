<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function genres()
    {
      return $this->belongsToMany('App\Genre');
    }

    public function actors()
    {
      return $this->belongsToMany('App\Actor');
    }
}

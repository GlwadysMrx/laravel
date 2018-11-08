<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  public function completeName()
  {
    return $this->name . " " . $this->surname;
  }
}

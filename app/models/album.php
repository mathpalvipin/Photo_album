<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{public function photos(){
 return $this->hasMany('App\models\photo');
  }  //
}

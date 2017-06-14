<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function company(){
      return $this->belongsTo('App\Company', 'id_company');
    }
}

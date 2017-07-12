<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class county extends Model
{
    public function vendor()
    {
        return $this->hasMany('App\vendor');
    }
}

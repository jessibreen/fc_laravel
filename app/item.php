<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    public function product()
    {
        return $this->belongsTo('App\product');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}

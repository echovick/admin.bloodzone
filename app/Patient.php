<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function transfusions(){
        return $this->hasMany('App\Transfusion');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function center(){
        return $this->belongsTo('App\Center');
    }
}
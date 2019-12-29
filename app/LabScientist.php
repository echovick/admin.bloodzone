<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabScientist extends Model
{
    protected $guarded = [];

    public function center(){
        return $this->belongsTo('App\Center'); 
    }

    public function donations(){
        return $this->hasMany('App\Donation');
    }

    public function transfusion(){
        return $this->hasMany('App\Transfusion');
    }
}
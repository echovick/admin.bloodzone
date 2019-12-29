<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $guarded = [];

    public function labScientists(){
        return $this->hasMany('App\LabScientist');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    public function donations(){
        return $this->hasMany('App\Donation');
    }

    public function transfusions(){
        return $this->hasMany('App\Transfusion');
    }

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }
}
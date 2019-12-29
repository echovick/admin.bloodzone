<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $guarded = [];

    public function donor(){
        return $this->belongsTo('App\Donor');
    }

    public function preExam(){
        return $this->hasOne('App\PreExam');
    }

    public function labScientist(){
        return $this->belongsTo('App\LabScientist');
    }

    public function center(){
        return $this->belongsTo('App\Center');
    }

    public function bloodBags(){
        return $this->hasMany('App\BloodBag');
    }
}
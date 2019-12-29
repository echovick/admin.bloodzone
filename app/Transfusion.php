<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfusion extends Model
{
    protected $guarded = [];

    public function patient(){
        return $this->belongsTo('App\Patient');
    }

    public function preExam(){
        return $this->belongsTo('App\PreExam');
    }

    public function center(){
        return $this->belongsTo('App\Center');
    }

    public function bloodBags(){
        return $this->hasMany('App\BloodBag');
    }

    public function labScientist(){
        return $this->belongsTo('App\LabScientist');
    } 
}
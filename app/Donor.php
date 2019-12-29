<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $guarded = [];

    public function donorProfile(){
        return $this->hasOne('App\DonorProfile');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    public function donations(){
        return $this->hasMany('App\Donation');
    }
}
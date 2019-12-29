<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];

    public function donor(){
        return $this->belongsTo('App\Donor');
    }

    public function center(){
        return $this->belongsTo('App\Center');
    }
}
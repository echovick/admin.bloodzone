<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreExam extends Model
{
    protected $guarded = [];

    public function donation(){
        return $this->hasOne('App\Donation');
    }

    public function transfusion(){
        return $this->hasOne('App\Transfusion');
    }
}
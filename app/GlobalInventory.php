<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalInventory extends Model
{
    protected $guarded = [];

    public function bloodBags(){
        return $this->hasMany('App\BloodBag');
    }

    public function centers(){
        return $this->hasMany('App\Center');
    }
}
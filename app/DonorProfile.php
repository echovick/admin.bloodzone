<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorProfile extends Model
{
    protected $guarded = [];
        
    public function donor(){
        return $this->belongsTo('App\Donor');
    }
}
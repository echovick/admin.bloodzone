<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Center extends Model
{
    protected $guarded = [];

    protected static function boot(){
        parent::boot();

        static::created(
            function ($center)
            {
                $lastId = \App\Center::count();
                $lastId++;
                $center->labScientists()->create([
                    'ls_id' => 'LS'.date("y").$lastId,
                    'password' => Hash::make('12345678'),
                ]);
            }
        );
    }

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
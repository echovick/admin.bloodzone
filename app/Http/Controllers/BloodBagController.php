<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodBagController extends Controller
{
    public function show(){
        return view('pages.bloodbags.show');
    }
}

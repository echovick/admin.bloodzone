<?php

namespace App\Http\Controllers;

use App\BloodBag;
use Illuminate\Http\Request;

class BloodBagController extends Controller
{
    public function show(){
        return view('pages.bloodbags.show');
    }

    public function index(BloodBag $bloodBag)
    {
        $bloodBags = $bloodBag->all();
        return view('pages.bloodbags.index', compact('bloodBags'));
    }
}

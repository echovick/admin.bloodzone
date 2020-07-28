<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabScientistController extends Controller
{
    public function show(){
        return view('labscientist.show');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabScientistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view('labscientist.show');
    }
}
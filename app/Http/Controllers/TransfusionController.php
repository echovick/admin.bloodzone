<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransfusionController extends Controller
{
    public function show(){
        return view('pages.transfusions.show');
    }
}

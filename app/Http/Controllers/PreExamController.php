<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreExamController extends Controller
{
    public function show(){
        return view('pages.preexams.show');
    }
}
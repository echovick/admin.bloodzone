<?php

namespace App\Http\Controllers;

use App\PreExam;
use Illuminate\Http\Request;

class PreExamController extends Controller
{
    public function index(PreExam $preExam){
        $preExams = $preExam->all();
        return view('pages.preexams.index', compact('preExams'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Patient $patient){
        $patients = $patient->all();
        return view('patient.index', compact('patients'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show(){
        return view('pages.appointments.show');
    }
}

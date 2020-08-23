<?php

namespace App\Http\Controllers;

use App\Appointment;
use Carbon\Traits\Date;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show(Appointment $appointment){
        $appointments = $appointment->all();

        return view('pages.appointments.show', compact('appointments'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function show(){
        return view('pages.donations.show');
    }
}

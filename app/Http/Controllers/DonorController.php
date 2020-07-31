<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(Donor $donor){
        $donors = $donor->all();
        return view('donor.index', compact('donors'));
    }
}

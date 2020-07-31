<?php

namespace App\Http\Controllers;

use App\BloodBag;
use App\GlobalInventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(BloodBag $bloodBag){
        $bloodBags = $bloodBag->all();
        return view('pages.inventory.index', compact('bloodBags'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CenterController extends Controller
{
    public function create(){
        return view('center.create');
    }

    public function show(){
        return view('center.show');
    }

    public function index(Center $center){
        $centers = $center->all();
        return view('center.index', compact('centers'));
    }

    public function store(){
        $data = request()->validate([
            'c_id' => '',
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone_1' => ['required', 'string'],
            'phone_2' => '',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:centers'],
            'state' => ['required', 'string'],
            'city' => ['required', 'string'],
            'bank' => '',
            'account_no' => '',
            'account_name' => '',
            'landmark' => '',
            'license' => ['required', 'image'],
            'status' => '',
        ]);

        $imagePath = request('license')->store('uploads\licenses', 'public');
        $lastId = \App\Center::count();
        $lastId++;

        \App\Center::create([
            'c_id' => 'CE'.date("y").$lastId,
            'name' => $data['name'],
            'address' => $data['address'],
            'phone_1' => $data['phone_1'],
            'phone_2' => $data['phone_2'],
            'email' => $data['email'],
            'state' => $data['state'],
            'city' => $data['city'],
            'bank' => $data['bank'],
            'account_number' => $data['account_no'],
            'account_name' => $data['account_name'],
            'landmark' => $data['landmark'],
            'license' => $imagePath,
            'status' => '',
        ]);

        return redirect('/c/register');
    }
}

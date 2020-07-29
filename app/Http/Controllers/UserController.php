<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function index(User $user)
    {
        $users = $user->all();
        return view('admin.show', compact('users'));
    }

    public function store()
    {
        $data = request()->validate([
            'admin_id' => '',
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'min:1', 'max:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10', 'max:12'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        $lastId = \App\User::count();
        $lastId++;

        \App\User::create([
            'admin_id' => 'ADMIN' . date("y") . $lastId,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('/u/register');
    }
}

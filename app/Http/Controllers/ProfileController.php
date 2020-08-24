<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public $status = 300;

    public function show()
    {
        return view('profile.show', ['user' => Auth::user()]);
    }

    public function update($admin, Request $request)
    {
        $error = NULL;
        $message = NULL;
        $attr = $this->attributes();

        if ($request['action'] == 'update-account') {
            $validateUserInfo = $request->validate([
                'admin_id' => ['required', Rule::unique('users')->ignore($admin)],
                'first_name' => ['string', 'min:3', 'nullable'],
                'last_name' => ['string', 'min:3', 'nullable'],
                'date_of_birth' => ['date', 'min:3', 'nullable'],
                'gender' => ['string', 'nullable'],
                'email' => ['email', 'min:3', 'nullable', Rule::unique('users')->ignore($admin)],
                'phone' => ['string', 'min:5', 'max:18', 'nullable'],
                'address' => ['string', 'nullable'],
            ]);

            if ($validateUserInfo) {
                if (!empty($request['first_name']) || !empty($request['last_name']) || !empty($request['date_of_birth']) || !empty($request['email']) || !empty($request['phone']) || !empty($request['address'])) {
                    foreach ($validateUserInfo as $item => $key) {
                        if (!empty($key)) {
                            User::where('id', $admin)->update([$item => $key]);
                            $message[$item] = $attr[$item] . ' Successfully Updated!!!';
                            $this->status = 200;
                        }
                    }
                } else {
                    $message = 'Please fill in at least one field to update!!!';
                }

            }
        } elseif ($request['action'] == 'update-password') {
            $validateUserPassword = $request->validate([
                'current-password' => ['required', 'string', 'min:3'],
                'password' => ['required', 'string', 'min:3'],
            ]);

            if ($validateUserPassword) {
                if (Hash::check($request['current-password'], User::where('id', $admin)->firstorFail()->password)) {
                    if ($request['current-password'] !== $request['password']) {
                        User::where('id', $admin)->update(['password' => Hash::make($request['password'])]);
                        $this->status = 200;
                    } else {
                        $error['password'] = $attr['password'] . '\'s cannot be the same!!!';
                    }
                } else {
                    $error['current-password'] = $attr['current-password'] . ' is incorrect!!!';
                }

                if ($this->status == 300) {
                    $message = 'The given data was invalid';
                }

            }
        }

        return json_encode([
            'status' => $this->status,
            'errors' => $error,
            'message' => $message,
        ]);
    }

    public function attributes()
    {
        return [
            'admin_id' => 'Admin Id',
            'first_name' => 'Fisrt name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Birth Date',
            'gender' => 'Gender',
            'email' => 'E-Mail Address',
            'phone' => 'Phone Number',
            'address' => 'Address',
            'current-password' => 'The Current Password',
            'password' => 'The Password',
        ];
    }
}
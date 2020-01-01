<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Password' => ['required', 'string', 'min:8', 'confirmed'],
            'FixNumber' => ['required', 'numeric', 'regex:/^0\d{10}$/'],
            'MobileNumber' => ['required', 'numeric', 'regex:/^09\d{9}$/'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        session(['UserFirstName' => $data['FirstName']]);
        return User::create([
            'FirstName' => $data['FirstName'],
            'LastName' => $data['LastName'],
            'Email' => $data['Email'],
            'Password' => Hash::make($data['Password']),
            'FixNumber' => $data['FixNumber'],
            'MobileNumber' => $data['MobileNumber'],
            'Role'=>11, //this  belongs to customers.
            'Department'=>8, //this belongs to customers.

        ]);
    }
}

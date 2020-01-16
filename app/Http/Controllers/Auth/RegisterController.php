<?php

namespace App\Http\Controllers\Auth;

use App\Department;
use App\Http\Controllers\Controller;
use App\Role;
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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
// ============for regular users
            'FirstName' => ['required', 'regex:/^[\pL\s\-]+$/u'], //acceps alpha and space in this field
            'LastName' => ['required', 'regex:/^[\pL\s\-]+$/u'],  //acceps alpha and space in this field
            'Email' => ['required', 'email', 'unique:users'],
            'Password' => ['required', 'min:8', 'confirmed'],
            'FixNumber' => ['required', 'numeric', 'regex:/^0\d{10}$/'],
            'MobileNumber' => ['required', 'numeric', 'unique:users', 'regex:/^09\d{9}$/'],
// ============end of regular users
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $role_id = Role::where('RoleName', 'مشتری')->value('id');
        $dep_id = Department::where('DepartmentName', 'مشتریان')->value('id');


        return User::create([
            'FirstName' => $data['FirstName'],
            'LastName' => $data['LastName'],
            'Email' => $data['Email'],
            'Password' => Hash::make($data['Password']),
            'FixNumber' => $data['FixNumber'],
            'MobileNumber' => $data['MobileNumber'],
            'role_id' => $role_id, //this  belongs to customers.
            'Department' => $dep_id, //this belongs to customers.
        ]);
    }
}

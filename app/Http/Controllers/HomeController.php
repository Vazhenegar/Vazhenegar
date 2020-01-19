<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('vazhenegar.DashboardIndex');
    }

    public function MenuPicker(User $user)
    {
        //get role of logged in user
        $role = $user->role()->first();

        //get menus of user related to role
        return $role->main_menus()->with('sub_menus')->get();

    }

}

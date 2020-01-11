<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
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


        $OnlineIds = (new \App\Session)->GetUsersId();
        SetUsersMode($OnlineIds);

        return view('vazhenegar.dashboard');
    }

    public function SetUserStatus($status)
    {
        if (Auth::check() && $status) {
            $CurrentUser = Auth::user();
            $CurrentUser->Mode = $status;
            $CurrentUser->save();
        } else {
            return back();
        }

    }

}

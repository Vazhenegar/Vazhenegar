<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('vazhenegar.dashboard');
    }

    public function ChangeStatus($UserId, $Status)
    {
//        $user = new User();
        $user = User::where('id', $UserId)->first();
        $user->Status = $Status;
        $user->save();
        return back();

    }
}

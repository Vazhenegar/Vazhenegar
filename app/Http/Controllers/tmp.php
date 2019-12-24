<?php

namespace App\Http\Controllers;

use App\State;
use App\City;

use Illuminate\Http\Request;

class tmp extends Controller
{

    public function index()
    {
        $states = State::all();
        return view('vazhenegar/tmp', compact('states'));
    }

    /**
     * Retrive cities name based on state selected by user
     */
    public function cities(State $state_id)
    {
        return $state_id->cities()->get();
    }
}
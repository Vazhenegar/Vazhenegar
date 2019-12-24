<?php

namespace App\Http\Controllers;

use App\NewsLetterMembers;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class NewsLetterMembersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nl-email' => 'email|required'
        ];
        $this->validate($request, $rules);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsLetterMembers  $newsLetterMembers
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetterMembers $newsLetterMembers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsLetterMembers  $newsLetterMembers
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetterMembers $newsLetterMembers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsLetterMembers  $newsLetterMembers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetterMembers $newsLetterMembers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsLetterMembers  $newsLetterMembers
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetterMembers $newsLetterMembers)
    {
        //
    }
}
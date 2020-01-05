<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public $UserId = '';

    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
        if (session('TranslatorId')) {
            //remove session so user cannot refresh and restart quiz from beginning
            session()->flush();
            return view('vazhenegar.TranslatorQuiz');
        } else {
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //remove translator session and all others sessions to prevent reload and resave to db
        $rules = [
            'QuizAnswer' => ['required'],
        ];
        $this->validate($request, $rules);
        $user = User::find(session('TranslatorId'));
        $user->QuizAnswer = $request->input('QuizAnswer');
        $user->save();
        //return to home page with success message
        session()->flash('status', 'Quiz Stored');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
    }
}

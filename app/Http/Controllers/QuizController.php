<?php

namespace App\Http\Controllers;

use App\Language;
use App\Quiz;
use App\QuizAnswer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\This;

class QuizController extends Controller
{
    public $QuizReference = [];
    public $FinalQuizIds = [];
    public $FinalAnswerIds = [];

    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
//if user fill employment form and didn't do the quiz before,
//then this page will shown otherwise user will redirect to home page.
        if (session('TranslatorId') && !User::find(session('TranslatorId'))->QuizAnswer) {

            $User = User::find(session('TranslatorId'));
            $UserFields = unserialize($User->TranslationFields);
            $UserLangs = unserialize($User->UserSelectedLangs);


            //extract source languages id from user selected array
            foreach ($UserLangs as $UserLang) {
                $Split = explode(' به ', $UserLang, 2);
                $UserLangsId[] = [
                    'source' => (new \App\Language)->GetLanguageId($Split[0]),
                    'dest' => (new \App\Language)->GetLanguageId($Split[1]),
                ];
            }

            //put user selected languages in array
            $UserLangsId = arr::pluck($UserLangsId, 'dest', 'source');

            //extract Fields id from user selected array
            foreach ($UserFields as $UserField) {
                $UserFieldsId[] = $UserField;
            }

            $this->QuizReference = [];

            //this var is for ensure that no duplicated question is selected.
            $RandomQuestionCollection = [];
            for ($i = 0; $i < count($UserFieldsId); $i++) {
                foreach ($UserLangsId as $UserSourceLang => $UserDestLang) {

                    //empty questions id array list for next selected question set
                    $QuizQuestionsId = [];

                    //get all set of questions in sourceLang and Field for select one of them
                    $Questions = (new \App\Quiz)->GetQuizTextId($UserSourceLang, $UserFieldsId[$i]);

                    //put id's of all questions related to field and source lang to array
                    foreach ($Questions as $id => $Questions) {
                        $QuizQuestionsId[] = $Questions;
                    }

                    do {
                        $RandomTextId = $QuizQuestionsId[array_rand($QuizQuestionsId)];
                        $RQ = (new \App\Quiz)->GetQuiz($UserSourceLang, $UserFieldsId[$i], $RandomTextId);
                    } while (in_array($RQ, $RandomQuestionCollection));
                    $RandomQuestionCollection[] = $RQ;

                    //this is for extracting question id and find answer related to this question form db
                    $RandomQuestion = $RQ;

                    foreach ($RandomQuestion as $item) {
                        $AnswerId = (new \App\QuizAnswer)->GetQuizAnswerId($item->SourceLanguageId, $UserDestLang, $item->TranslationFieldId, $item->TextId);

                        //get all of questions related to fields and languages selected by user
                        $this->QuizReference[] = [
                            'Reference' => [
                                'QuizId' => $item->id,
                                'AnswerId' => $AnswerId,
                            ],
                        ];
                    }


                } //end of language loop
            } //end of field loop

            //select 2 random quiz from reference
            $SelectedQuizId = Arr::pluck($this->QuizReference, 'Reference');
            $this->FinalQuizIds = [];
            $this->FinalAnswerIds = [];

            //if quiz reference has more than 2 items, select 2random quiz item from that.
            if (count($SelectedQuizId) >= 2) {
                $SelectedQuizId = array_rand($SelectedQuizId, 2);
                foreach ($SelectedQuizId as $item) {
                    $this->FinalQuizIds[] = Arr::pluck($this->QuizReference[$item], 'QuizId');
                    $this->FinalAnswerIds[] = Arr::pluck($this->QuizReference[$item], 'AnswerId');
                }
            } else {
                foreach ($SelectedQuizId as $item) {
                    $this->FinalQuizIds[] = $item['QuizId'];
                    $this->FinalAnswerIds[] = $item['AnswerId'];
                }
            }

            $Contents = [];
            foreach ($this->FinalQuizIds as $finalQuizId) {
                $Contents[] = Quiz::where('id', $finalQuizId)->value('QuizContent');
            }

            session(['QuizIds' => $this->FinalQuizIds, 'AnswerIds' => $this->FinalAnswerIds]);
            return view('vazhenegar.TranslatorQuiz', compact('Contents'));
        } else {
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //create pair of quiz answer array to save in user db
        $this->QuizReference = [];

//        $rules = [
//            'QuizAnswer' => [''],
//        ];
//        $this->validate($request, $rules);
        $user = User::find(session('TranslatorId'));
        $user->UserQuizAnswer = $request->input('QuizAnswer');

        for ($i = 0; $i < count(session('QuizIds')); $i++) {
            $this->QuizReference[] = [
                'Reference' => [
                    'QuizId' => session('QuizIds')[$i],
                    'AnswerId' => session('AnswerIds')[$i],
                ],
            ];

        }
        $user->QuizReference =serialize($this->QuizReference);

        $user->save();

        //remove translator id to prevent reload same quiz page after save
        session()->forget(['TranslatorId', 'QuizIds', 'AnswerIds','timer']);

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
    public
    function show(Quiz $quiz)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Quiz $quiz)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Quiz $quiz)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Quiz $quiz)
    {
    }
}

<?php

namespace App\Http\Controllers;

use App\TranslatorEmployment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use App\State;
use App\Language;
use App\TranslationField;
use App\Role;
use App\Department;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class TranslatorEmploymentController extends Controller
{

    /**
     * Retrive cities name based on state selected by user
     * @param State $state_id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function cities(State $state_id)
    {
        return $state_id->cities()->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        $languages = Language::all();
        $translation_fields = TranslationField::all();
        return view(
            'vazhenegar.TranslatorEmployment',
            compact('states', 'languages', 'translation_fields')
        );
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'FirstName' => ['required', 'regex:/^[\pL\s\-]+$/u'], //acceps alpha and space in this field
            'LastName' => ['required', 'regex:/^[\pL\s\-]+$/u'],  //acceps alpha and space in this field
            'BirthDate' => ['required'],
            'Gender' => ['required', 'boolean'],
            'Email' => ['required', 'email', 'unique:users'],
            'Password' => ['required', 'min:8', 'confirmed'],
            'FixNumber' => ['required', 'numeric', 'regex:/^0\d{10}$/'],
            'MobileNumber' => ['required', 'numeric', 'unique:users', 'regex:/^09\d{9}$/'],
            'State' => ['required', 'numeric', 'min:1', 'max:31'],
            'City' => ['required', 'numeric', 'min:1', 'max:429'],
            'Address' => ['required', 'max:150'],
            'Degree' => ['required', 'regex:/^[\pL\s\-]+$/u'], //acceps alpha and space in this field
            'GraduationDate' => ['required'],
            'GraduationField' => ['required', 'regex:/^[\pL\s\-\/]+$/u'], //acceps alpha and space and '/' in this field
            'Resume' => ['nullable'],
            'UserSelectedLangs' => ['required'],
            'TranslationFields' => ['required', 'array'],
            'UserDocuments' => ['nullable', 'file', 'mimes:zip,rar', 'max:1999'],
            'tos' => ['required', 'accepted'], //terms of service

        ];

        $this->validate($request, $rules);

        //serialize array to save in DB
        $TranslatorSelectedLangs = serialize($request->input('UserSelectedLangs')); //for get array back use unserialize
        $TranslationFields = serialize($request->input('TranslationFields')); //for get array back use unserialize

        $filename = '';
        if ($request->hasFile('UserDocuments')) {
            $uploaded = $request->file('UserDocuments');
            $filename = $request->input('FirstName') . '-' . $request->input('LastName') . '-' . time() . '.' . $uploaded->getClientOriginalExtension();  //FirstName-LastName-timestamp.extension
            $uploaded->storeAs('public\Translators' . $request->input('FirstName') . ' ' . $request->input('LastName'), $filename);
        }

        $role_id = Role::where('RoleName', 'مترجم')->value('id');
        $dep_id = Department::where('DepartmentName', 'ترجمه')->value('id');

        $translator = new User;
        $translator->FirstName = $request->input('FirstName');
        $translator->LastName = $request->input('LastName');
//        $translator->BirthDate = datetime('Y-m-d H:i:s', ($request->input('BirthDateAlt')/1000));
        $translator->BirthDate = Carbon::createFromTimestamp($request->input('BirthDateAlt')/1000,'Asia/Tehran');
        $translator->Gender = $request->input('Gender');
        $translator->Email = $request->input('Email');
        $translator->Password = Hash::make($request->input('Password'));
        $translator->FixNumber = $request->input('FixNumber');
        $translator->MobileNumber = $request->input('MobileNumber');
        $translator->State = $request->input('State');
        $translator->City = $request->input('City');
        $translator->Address = $request->input('Address');
        $translator->Degree = $request->input('Degree');
        $translator->GraduationDate =Carbon::createFromTimestamp($request->input('GraduationDateAlt')/1000,'Asia/Tehran');
        $translator->GraduationField = $request->input('GraduationField');
        $translator->Resume = $request->input('Resume');
        $translator->UserSelectedLangs = $TranslatorSelectedLangs;
        $translator->TranslationFields = $TranslationFields;
        $translator->UserDocuments = $filename;
        $translator->Department = $dep_id;
        $translator->role_id = $role_id;

        $translator->saveOrFail();
        session([
            'TranslatorId' => $translator->id,
        ]);
        return redirect()->to('/quiz');


//run command (php artisan storage:link) in terminal to link storage\app folder to public\storage to use in whole website

    }

    /**
     * Display the specified resource.
     *
     * @param \App\TranslatorEmployment $translatorEmployment
     * @return \Illuminate\Http\Response
     */
    public function show(TranslatorEmployment $translatorEmployment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\TranslatorEmployment $translatorEmployment
     * @return \Illuminate\Http\Response
     */
    public function edit(TranslatorEmployment $translatorEmployment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\TranslatorEmployment $translatorEmployment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TranslatorEmployment $translatorEmployment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\TranslatorEmployment $translatorEmployment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TranslatorEmployment $translatorEmployment)
    {
        //
    }
}

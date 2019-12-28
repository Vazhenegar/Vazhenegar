<?php

Route::get('/', function () {
    return view('vazhenegar.index');
});

Route::get('about-us', function () {
    return view('vazhenegar.about-us');
});

Route::resource('tos', TermsOfServiceController::class);

Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

Route::get('employment.city.{state_id}', 'EmploymentController@cities');
Route::resource('employment', EmploymentController::class);
Route::resource('quiz',QuizController::class);

Route::get('tmp',function (){
    return view('vazhenegar.tmp');
});

Route::view('login','vazhenegar.login');

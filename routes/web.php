<?php

Route::get('/', function () {
    return view('vazhenegar/index');
});

Route::get('/about-us', function () {
    return view('vazhenegar/about-us');
});

Route::resource('tos', TermsOfServiceController::class);

Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

Route::get('/employment/city/{state_id}', 'EmploymentController@cities');
Route::get('/employment/quiz', 'EmploymentController@quiz')->name('quiz');
//Route::get('/employment/quiz/{user}', 'EmploymentController@quiz')->name('quiz');
Route::resource('employment', EmploymentController::class);

Route::get('/tmp',function (){
    return view('vazhenegar/tmp');
});

<?php

Route::view('/', 'vazhenegar.index');
Route::view('about-us', 'vazhenegar.about-us');
Route::view('tmp', 'vazhenegar.tmp');

Route::resource('tos', TermsOfServiceController::class);
Route::resource('NewsLetterMembers', NewsLetterMembersController::class);
Route::resource('quiz', QuizController::class);

Route::get('employment/city/{state_id}', 'TranslatorEmploymentController@cities');
Route::resource('TranslatorEmployment', TranslatorEmploymentController::class);

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/GetOnlineUsers', function () {
    return OnlineUsers();
});

Route::view('/d','vazhenegar.dashboard');
Route::view('/r','auth.register');

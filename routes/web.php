<?php

Route::view('/', 'vazhenegar.index');


Route::view('about-us', 'vazhenegar.about-us');

Route::resource('tos', TermsOfServiceController::class);

Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

Route::resource('quiz',QuizController::class);

Route::view('tmp', 'vazhenegar.tmp');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('employment/city/{state_id}', 'EmploymentController@cities');
Route::resource('employment', EmploymentController::class);

Route::post('/ChangeUserStatus/{UserId}/{Status}', 'HomeController@ChangeStatus')->name('changestatus');

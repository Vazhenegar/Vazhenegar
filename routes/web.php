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
Route::resource('/dashboard/NewOrders',OrderController::class);

Route::post('/GetDailyVisitors/{day}', function ($day) {
    return (new App\Session)->GetSiteVisitors($day);
});

Route::post('/UserMenus/{user}','DashboardMenuPicker@MenuPicker');

//========================== Helpers Routes ======================//
//Get users that have Online mode in DB
Route::get('/GetOnlineUsers', function () {
    return OnlineUsers();
});

//Set Online and Offline users mode in DB
Route::get('/SetUsersMode',function (){
    SetUsersMode();
});

//Get users that fill employment form for translation
Route::get('/NewEmployments',function (){
   return NewEmployment();
});

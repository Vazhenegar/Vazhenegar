<?php
//====================================== Main Routes
Route::view('/', 'vazhenegar.index');
Route::view('about-us', 'vazhenegar.about-us');
Route::view('tmp', 'vazhenegar.tmp');
Route::resource('tos', TermsOfServiceController::class);
Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

//===================================== Employment
Route::resource('quiz', QuizController::class);
Route::get('employment/city/{state_id}', 'TranslatorEmploymentController@cities');
Route::resource('TranslatorEmployment', TranslatorEmploymentController::class);

//===================================== Dashboard
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//===================================== Orders
Route::resource('/dashboard/Order',OrderController::class);


//================================== Helpers Routes

//============ Public

//Set Online and Offline users mode in DB
Route::get('/SetUsersMode',function (){
    SetUsersMode();
});

//Give number of visitors that see the website for last X day(s)
Route::post('/UserMenus/{user}', function ($user) {
    return MenuPicker($user);
});


//============ Admin

//Get count of orders that registered by all of users (to show in admin badges)
Route::get('/AllNewRegisteredOrders',function (){
    return AllNewRegisteredOrders();
});

//Get users that have Online mode in DB
Route::get('/GetOnlineUsers', function () {
    return OnlineUsers();
});

//Get users that fill employment form for translation
Route::get('/NewEmployments',function (){
    return NewEmployment();
});

//Give number of visitors that see the website for last X day(s)
Route::post('/GetSiteVisitors/{day}', function ($day) {
    return GetSiteVisitors($day);
});


//============ Translators


//============ Customers

//Get count of orders that registered by a specific user (to show in that users badges)
Route::get('/CustomersRegisteredOrders/{UserId}',function ($UserId){
   return CustomerRegisteredOrders($UserId);
});

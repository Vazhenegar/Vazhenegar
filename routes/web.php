<?php

//====================================== Management Routes Start
//---------- clear app cache
Route::get('/ClearAllCaches', function () {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

//---------- DB Migration Routes
Route::get('/migrate', function() {
    Artisan::call('migrate:refresh --seed');
});

//====================================== Management Routes End




//====================================== Main Routes Start
Route::view('/', 'vazhenegar.index');
Route::view('translation-services', 'vazhenegar.TranslationServices');
Route::view('about-us', 'vazhenegar.about-us');
Route::resource('tos', TermsOfServiceController::class);
Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

//===================================== Employment
Route::resource('quiz', QuizController::class);
Route::get('employment/city/{state_id}', 'TranslatorEmploymentController@cities');
Route::resource('TranslatorEmployment', TranslatorEmploymentController::class);

//====================================== Main Routes End



//===================================== Dashboard Start
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');



//======================== Orders Start
Route::get('/dashboard/OrdersList/{StatusId?}/{UserId?}','OrderController@Orders')->name('GetOrders');
Route::get('/dashboard/Order/bank_response','OrderController@response')->name('BankResponse');
Route::post('/dashboard/Order/pay','OrderController@pay')->name('Pay');
Route::resource('Order', OrderController::class);
//======================== Orders Start



//===================================== File Download
Route::get('/download/{user_id}/{OrderFile}','OrderController@download')->name('Download');




//=================================== Dashboard Menus Start
//====================== Public Start
//================ Orders
Route::get('/dashboard/List/{StatusId?}/{UserId?}','OrderController@ShowOrdersList')->name('OL');


//====================== Public End


//======================= Admin Start





//========== Users Start

//========== Users End




//========== Messages Start

//========== Messages End




//========== Accounting Start

//========== Accounting End



//========== Settings Start
//--- Bank Setting
Route::resource('/dashboard/Bank',BankController::class);



//========== Settings End

//======================= Admin End






//======================= Customer Start

//========== Orders Start

//========== Orders End



//========== Messages Start

//========== Messages End



//========== Accounting Start

//========== Accounting End



//========== Settings Start

//========== Settings End




//========== Guide Start

//========== Guide End

//======================= Customer End



//======================= Translator Start


//======================= Translator End
//=================================== Dashboard Menus End



//===================================== Dashboard End





//================================== Helpers Routes
//============ Public

//Set Online and Offline users mode in DB
Route::get('/SetUsersMode', function () {
    SetUsersMode();
});

//Give number of visitors that see the website for last X day(s)
Route::post('/UserMenus/{user}', function ($user) {
    return MenuPicker($user);
});


//============ Admin

//show new orders that registered by all users
Route::view('/dashboard/NewRegisteredOrders', 'vazhenegar.DashboardElements.Admin.DashboardAdminNewOrders');

//Get users that have Online mode in DB
Route::get('/GetOnlineUsers', function () {
    return OnlineUsers();
});

//Get users that fill employment form for translation
Route::get('/NewEmployments', function () {
    return NewEmployment();
});

//Give number of visitors that see the website for last X day(s)
Route::post('/GetSiteVisitors/{day}', function ($day) {
    return GetSiteVisitors($day);
});


//show list of orders that invoices are paid by user
Route::get('/dashboard/PaidInvoicesList', 'OrderController@PaidOrdersList');

Route::post('/dashboard/InvoiceAcceptance/{order_id}','OrderController@InvoiceAcceptance')->name('InvoiceAcceptance');

//============ Translators



//============ Customers
//Get invoices list page
Route::view('/dashboard/Invoices','vazhenegar.DashboardElements.Customer.DashboardCustomerOrderInvoiceList');

//confirm customer invoice payment
Route::post('Invoices/{user_id}/{order_id)/','OrderController@payment');

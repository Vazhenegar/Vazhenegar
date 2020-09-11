<?php

//====================================== Management Routes
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

//====================================== Main Routes
Route::view('/', 'vazhenegar.index');
Route::view('translation-services', 'vazhenegar.TranslationServices');
Route::view('about-us', 'vazhenegar.about-us');
Route::resource('tos', TermsOfServiceController::class);
Route::resource('NewsLetterMembers', NewsLetterMembersController::class);

//===================================== Employment
Route::resource('quiz', QuizController::class);
Route::get('employment/city/{state_id}', 'TranslatorEmploymentController@cities');
Route::resource('TranslatorEmployment', TranslatorEmploymentController::class);

//===================================== Dashboard
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/dashboard/CustomerRegisteredOrders','OrderController@customerRegisteredOrders');
Route::get('/dashboard/Order/bank_response','OrderController@response')->name('BankResponse');
Route::post('/dashboard/Order/pay','OrderController@pay')->name('Pay');

//======================== Admin
//===================================== Orders
Route::resource('/dashboard/Order', OrderController::class);


//================= Setting
//---- Banks Setting
Route::resource('/dashboard/Bank',BankController::class);


//===================================== File Download
Route::get('/download/{user_id}/{OrderFile}','OrderController@download')->name('Download');


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

//fetch list of orders depending of user role and list type (new, in progress, finished, cancelled,...) from db
Route::get('/dashboard/OrdersList', function () {
    return GetOrders();
});


//============ Admin

//Get count of orders that registered by all of users (to show in admin badges)
Route::get('/AllNewRegisteredOrders', function () {
    return AllNewRegisteredOrders();
});

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

//get orders that invoices are paid by user
Route::get('/dashboard/PaidInvoices', function (){
    return PaidInvoices();
});

//show list of orders that invoices are paid by user
Route::get('/dashboard/PaidInvoicesList', 'OrderController@PaidOrdersList');

Route::post('/dashboard/InvoiceAcceptance/{order_id}','OrderController@InvoiceAcceptance')->name('InvoiceAcceptance');

//============ Translators


//============ Customers

//Get count of orders that registered by a specific user (to show in that users badges)
Route::get('/CustomersRegisteredOrders/{UserId}', function ($UserId) {
    return CustomerRegisteredOrders($UserId);
});

//Get invoices list page
Route::view('/dashboard/Invoices','vazhenegar.DashboardElements.Customer.DashboardCustomerOrderInvoiceList');

//Get customers invoices
Route::get('Invoices/{user_id}/{status_id}', function ($user_id, $status_id) {
    return CustomerInvoices($user_id, $status_id);
});

//confirm customer invoice payment
Route::post('Invoices/{user_id}/{order_id)/','OrderController@payment');

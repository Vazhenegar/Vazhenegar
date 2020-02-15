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
Route::get('/dashboard/CustomerRegisteredOrders','OrderController@customerRegisteredOrders');

//===================================== Orders invoce submit
Route::get('/dashboard/Order/{order_id}/{paid_price}/InvoiceSubmit', 'OrderController@InvoiceSubmit');
//===================================== Orders
Route::resource('/dashboard/Order', OrderController::class);


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

//Get count of orders that registered by all of users (to show in admin badges)
Route::get('/AllNewRegisteredOrders', function () {
    return AllNewRegisteredOrders();
});

//show new orders that registered by all users
Route::view('/dashboard/NewRegisteredOrders', 'vazhenegar/DashboardAdminNewOrdersList');

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
Route::view('/dashboard/Invoices','vazhenegar.DashboardCustomerOrderInvoiceList');

//Get customers invoices
Route::get('Invoices/{user_id}/{status_id}', function ($user_id, $status_id) {
    return CustomerInvoices($user_id, $status_id);
});

//confirm customer invoice payment
Route::post('Invoices/{user_id}/{order_id)/','OrderController@payment');

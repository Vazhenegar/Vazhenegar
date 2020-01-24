@extends('auth.DashboardLayout.DashboardMasterLayout')
@php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);

 // for admin badges
    $allNewRegisteredOrders=AllNewRegisteredOrders();
    $employmentRequest=NewEmployment();
    $OnlineUsers=OnlineUsers();
    $DailyVisitors=(new App\Session)->GetSiteVisitors(1);

//  for user badges
    $UserId=$CurrentUser->id;
    $userRegisteredOrders=UserRegisteredOrders($CurrentUser->id);

@endphp

@section('content')
    @switch($CurrentUser->role()->value('id'))
        {{--=============================== ِ Admin =======================================--}}
        @case(1)
@section('Title', '- پنل '.$Role)
@include('vazhenegar.DashboardAdminContent')
@break
{{--=============================== ِ Translator =======================================--}}
@case(8)
@section('Title', '- پنل '.$Role)


@break
{{--=============================== ِ Customer =======================================--}}
@case(11)
@section('Title', '- پنل '.$Role)
@include('vazhenegar.DashboardCustomerContent')
@break
@endswitch
@endsection

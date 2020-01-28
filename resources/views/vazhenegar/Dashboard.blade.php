@extends('auth.DashboardLayout.DashboardMasterLayout')
@php
//  General
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=MenuPicker($CurrentUser);

 // for admin badges
    $allNewRegisteredOrders=AllNewRegisteredOrders();
    $employmentRequest=NewEmployment();
    $OnlineUsers=OnlineUsers();
    $SiteVisitors=GetSiteVisitors(1);

//  for customer badges
    $CustomerId=$CurrentUser->id;
    $CustomerRegisteredOrders=CustomerRegisteredOrders($CurrentUser->id);

@endphp

@section('content')
    @switch($CurrentUser->role()->value('id'))
        {{--=============================== ِ Admin =======================================--}}
        @case(1)
@section('Title', ' پنل '.$Role)
@include('vazhenegar.DashboardAdminIndex')
@break
{{--=============================== ِ Translator =======================================--}}
@case(8)
@section('Title', ' پنل '.$Role)


@break
{{--=============================== ِ Customer =======================================--}}
@case(11)
@section('Title', ' پنل '.$Role)
@include('vazhenegar.DashboardCustomerIndex')
@break
@endswitch
@endsection

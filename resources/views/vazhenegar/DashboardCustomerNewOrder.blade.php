@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', '- ثبت سفارش جدید')

@php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=(new App\Http\Controllers\HomeController)->MenuPicker($CurrentUser);
@endphp

@section('content')
    <p>صفحه ثبت سفارش جدید مشتری</p>
@endsection

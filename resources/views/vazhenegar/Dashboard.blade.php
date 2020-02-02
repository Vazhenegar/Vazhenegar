@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('content')

@include('vazhenegar.DashboardCurrentUser')

@switch(DashboardCurrentUser::$CurrentUser->role()->value('id'))
        {{--=============================== ِ Admin =======================================--}}
        @case(1)
@section('Title', ' پنل '.DashboardCurrentUser::$Role)
@include('vazhenegar.DashboardAdminIndex')
@break
{{--=============================== ِ Translator =======================================--}}
@case(5)
@section('Title', ' پنل '.DashboardCurrentUser::$Role)
@include('vazhenegar.DashboardTranslatorIndex')
@break
{{--=============================== ِ Customer =======================================--}}
@case(11)
@section('Title', ' پنل '.DashboardCurrentUser::$Role)
@include('vazhenegar.DashboardCustomerIndex')
@break
@endswitch
@endsection

@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('content')

    @include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')

    @switch(DashboardCurrentUser::$CurrentUser->role()->value('id'))
            {{--=============================== ِ Admin =======================================--}}
            @case(1)
                @section('Title', ' پنل '.DashboardCurrentUser::$Role)
                @include('vazhenegar.DashboardElements.Admin.DashboardAdminIndex')
            @break
    {{--=============================== ِ Translator =======================================--}}
            @case(5)
                @section('Title', ' پنل '.DashboardCurrentUser::$Role)
                @include('vazhenegar.DashboardElements.Translator.DashboardTranslatorIndex')
            @break
    {{--=============================== ِ Customer =======================================--}}
            @case(11)
                @section('Title', ' پنل '.DashboardCurrentUser::$Role)
                @include('vazhenegar.DashboardElements.Customer.DashboardCustomerIndex')
            @break
    @endswitch
@endsection

@extends('auth.DashboardLayout.DashboardMasterLayout')
@php
    $role_name=\App\Role::where('id',Auth::user()->Role)->value('RoleName');
@endphp

@section('Role', $role_name)

@section('content')

    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->FirstName }} <span class="caret"></span>
    </a>

    {{--======  for logout from dashboard =============--}}
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        خروج از ناحیه کاربری
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    {{--==============================================--}}

    @include('auth.DashboardLayout.menus')

@endsection

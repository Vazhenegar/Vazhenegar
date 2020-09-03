<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--    css files --}}
    @include('auth.DashboardLayout.DashboardCoreCss')

</head>

<body class="hold-transition skin-blue sidebar-mini">

@guest
    {{--    if user not logged in, show login form --}}
    @php
        return redirect()->route('login');
    @endphp

@else

    <div class="wrapper">

        {{--=========================================================--}}

        @include('vazhenegar.DashboardElements.SharedParts.DashboardTopBar')

        {{--=========================================================--}}

        @include('vazhenegar.DashboardElements.SharedParts.DashboardRightSideBar')

        {{--=========================================================--}}

        @include('vazhenegar.DashboardElements.SharedParts.DashboardLeftSideBar')


        {{--   main content of dashboard      --}}
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @section('content')
                @show
            </section>
        </div>
    </div>
@endguest
@include('scripts.DashboardCoreScripts')
{{-- script for initialize badges with data --}}
@include('scripts.DashboardBadgesAndMenusQuantification')
</body>
</html>

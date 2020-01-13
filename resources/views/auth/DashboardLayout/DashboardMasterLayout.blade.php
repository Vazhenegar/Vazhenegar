<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>{{config('app.name')}} @yield('Role')</title>

    {{--    css files --}}
    @include('auth.DashboardLayout.css')

</head>

<body class="hold-transition skin-blue sidebar-mini">


@guest
    {{--    if user not logged in, show login form --}}
    @php
        return redirect()->route('login');
    @endphp

@else

    <div class="wrapper">
        @section('content')
        @show
    </div>
@endguest


{{--js files--}}
@include('auth.DashboardLayout.js')

</body>
</html>

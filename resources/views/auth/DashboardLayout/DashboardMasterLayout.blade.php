<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>{{config('app.name')}}- پنل @yield('Role')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{--    css files --}}
    @include('auth.DashboardLayout.css')
</head>
<body>

@guest
{{--    if user not logged in, show login form --}}
    @php
        return redirect()->route('login');
    @endphp

@else
{{--if user logged in, show dashboard--}}
@section('content')
@show

@endguest


</body>
</html>

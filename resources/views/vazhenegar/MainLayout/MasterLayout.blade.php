<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ترجمه تخصصی متون و مقالات">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} - @yield('PageTitle')</title>

    {{-- insert css files in master MainLayout --}}
    @include('vazhenegar.MainLayout.CoreCss')

</head>

<body>
{{--  INSERT FIXED ELEMENTS TO THIS LAYOUT --}}
@include('vazhenegar.MainLayout.PageStaticElements')


<!-- Preloader goes here -->
@section('preloader')
@show

<!-- ***** Header And Nav Area ***** -->
@section('HeaderAndNav')
@show

<!-- ***** ›Content Area, will vary depends on the page that user visits ***** -->
@section('content')
@show

<!-- ***** Footer Area ***** -->
@section('Footer')
@show

<!-- ***** Script Area ***** -->
@include('scripts.CoreScripts')

</body>

</html>

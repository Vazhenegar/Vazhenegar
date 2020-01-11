<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ترجمه تخصصی متون و مقالات">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- insert css files in master layout --}}
    @include('vazhenegar.layout.css')

</head>

<body>
@include('vazhenegar.layout.PageStaticElements')
{{--  INSERT FIXED ELEMENTS TO THIS LAYOUT --}}


<!-- Preloader goes here -->
@section('preloader')
@show

<!-- ***** Header And Nav Area ***** -->
@section('HeaderAndNav')
@show

@section('content')
@show

<!-- ***** Footer Area ***** -->
@section('Footer')
@show

<!-- ***** Script Area ***** -->
@include('vazhenegar.layout.Scripts')

{{--Helper function to set online and offline users mode.--}}
@php
    SetUsersMode();
@endphp
</body>

</html>

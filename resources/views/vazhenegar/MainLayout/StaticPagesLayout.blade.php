<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <title>{{config('app.name')}} - Contact Us</title> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body dir="rtl">
<nav>
@section('nav')
    <a href="/">صفحه اصلی</a>
    &nbsp; &nbsp;
@show
</nav>
<h1>
    @yield('pageTitle')
</h1>
<article>
    @section('content')
    @show
</article>
</body>
</html>

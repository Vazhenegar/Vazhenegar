@extends('ContactUs::contact-usNav')
@section('pageTitle', 'مشاهده و ویرایش تماس با ما')

@section('content')
    <form action="/contact-us/{{ $ContactUs->id }}/edit" method="get">
        <h3>
            {{ $ContactUs->title }}
            <button type="submit" >ویرایش</button>
        </h3>
        <p>
            {{ $ContactUs->body }}
        </p>
    </form>

@endsection

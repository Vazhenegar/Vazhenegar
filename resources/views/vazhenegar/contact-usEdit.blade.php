@extends('ContactUs::contact-usNav')
@section('pageTitle', 'ویرایش سوالات متداول')

@section('content')
    <form method="post" action="/contact-us/{{$ContactUs->id}}">
        {{method_field('PATCH')}}
        <label>عنوان
            <input type="text" name="title" value="{{$ContactUs->title}}">
        </label>
        <br>
        <label>متن
            <textarea name="body">{{$ContactUs->body}}</textarea>
        </label>
        <br>
        <button type="submit">ویرایش</button>
    </form>
@endsection

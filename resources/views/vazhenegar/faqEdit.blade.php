@extends('faq::faqNav')

@section('pageTitle', 'ویرایش سوالات متداول')

@section('content')
    <form   method="post" action="/faq/{{$faq->id}}" >
        {{method_field('PATCH')}}
        <label>سوال
            <input type="text" name='q' value="{{$faq->q}}">
        </label>
        <br>
        <label>پاسخ
            <textarea name="a">{{$faq->a}}</textarea>
        </label>
        <br>
        <button type="submit">ویرایش</button>
    </form>

    @endsection

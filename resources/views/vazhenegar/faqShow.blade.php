
@extends('faq::faqNav')

@section('pageTitle', 'مشاهده و ویرایش سوالات متداول')

@section('content')
    <form action="/faq/{{ $faq->id }}/edit" method="get">
<h3>
{{ $faq->q }}
    <button type="submit" value="submit">ویرایش</button>
</h3>
    <p>
{{ $faq->a }}
    </p>
    </form>
    @endsection

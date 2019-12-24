@extends('faq::faqNav')
@section('pageTitle' , 'مدیریت بخش سوالات متداول')
@section('content')
    <h3>لیست سوالات متداول سایت</h3>
    <div>
        <table>
            <thead>
            <tr>
                <td>ردیف</td>
                <td>عنوان سوال</td>
                <td>نمایش و ویرایش</td>
                <td>حذف</td>
            </tr>
            </thead>
            <tbody>
            @foreach($faqs as $faq)
                <form action="/faq/{{ $faq->id }}" method="post">
                    {{ method_field('DELETE') }}
                <tr>
                    <td>{{$faq->id}}</td>
                    <td>{{$faq->q}}</td>
                    <td><a href="/faq/{{ $faq->id }}"> نمایش و ویرایش</a></td>
                    <td><button type="submit" >حذف</button> </td>
                </tr>
                </form>
            @endforeach

            </tbody>
        </table>
    </div>
    <hr>
    <section title="addNewFaq">
        <form action="/faq" method="post">
            <h2>افزودن سوالات متداول جدید</h2><br>
            <label>سوال
                <input type="text" name="q">
            </label>
            <br>
            <label>پاسخ
                <textarea name="a"></textarea>
            </label>
            <br>
            <button type="submit">ثبت</button>
        </form>
    </section>
@endsection

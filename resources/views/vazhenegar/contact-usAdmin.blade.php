@extends('ContactUs::contact-usNav')
@section('pageTitle' , 'مدیریت بخش تماس با ما')
@section('content')
    <h3>لیست بخش تماس با ما</h3>
    <div>
        <table>
            <thead>
            <tr>
                <td>ردیف</td>
                <td>عنوان </td>
                <td>نمایش و ویرایش</td>
                <td>حذف</td>
            </tr>
            </thead>
            <tbody>
            @foreach($ContactUs as $data)
                <form action="/contact-us/{{ $data->id }}" method="post">
                    {{ method_field('DELETE') }}
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td><a href="/contact-us/{{ $data->id }}"> نمایش و ویرایش</a></td>
                        <td>
                            <button type="submit">حذف</button>
                        </td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <section title="addNewContactUs">
        <form action="/contact-us" method="post">
            <h2>افزودن سوالات متداول جدید</h2><br>
            <label>تیتر
                <input type="text" name="title">
            </label>
            <br>
            <label>متن
                <textarea name="body"></textarea>
            </label>
            <br>
            <button type="submit">ثبت</button>
        </form>
    </section>
@endsection

@extends('vazhenegar.layout.MasterLayout')
@section('PageTitle', 'آزمون آنلاین')

@section('content')


    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12 mb-15" dir="rtl">
                    <h1 class="title">آزمون آنلاین</h1>
                    <h3 class="description">متن زیر را تا قبل از اتمام زمان، با دقت ترجمه کنید و در کادر پایین
                        بنویسید.</h3>
                    <h3><p>this is quiz page for translator with id of {{$user->id}} and the name of {{$user->FirstName}}</p></h3>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** ‏Timer Goes Here ***** -->
    <div class="container col-12 mb-15" dir="ltr">
        <div class="row">
            <div class="timer">
                <span class="col-2" id="cd-min">00</span>
                <span>:</span>
                <span class="col-2" id="cd-sec">00</span>
                <span class="col-2" id="cd-sec">زمان باقی مانده </span>
            </div>
        </div>
    </div>
    <!-- ***** Timer Area End ***** -->
    <!-- ***** Quiz Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Quiz Content -->
                <form action="#" method="post"></form>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="QuizText" rows="10" disabled>this is Quiz textarea.
                        this text is fetched from db to show to translator.
                            it is a multiline text.
                            but we dont want user to be able to change the source text.
                            so we are goint to disable this textarea and see if it work properly or no
                            at the same time we dont want it to stretch too much
                            now if this
                            text goes
                            so long
                            and long
                            and long
                            the textarea wont be too long
                            and it contains scrollbar
                            to see the rest of this text.
                        </textarea>
                    </div>
                </div>

                <div class="col-12" dir="rtl">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="QuizAnswer" rows="10" required></textarea>
                    </div>
                </div>

                <div class="col-12 mb-30">
                    <button type="submit" class="quiz-submit btn uza-btn btn-2 mt-15">ارسال</button>
                </div>

                </form>

            </div>
        </div>
    </section>
    <!-- ***** Quiz Area End ***** -->

@endsection

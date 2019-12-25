{{--<p>this is quiz page for translator with id of {{$user->id}}</p>--}}
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
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <div class="container mb-15" dir="ltr">
        <div class="row">
            timer goes here.
        </div>
    </div>
    <!-- ***** Why Choose Us Area Start ***** -->
    <section class="uza-why-choose-us-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Quiz Content -->
                <form action="#" method="post"></form>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="QuizText">this is Quiz textarea.</textarea>
                    </div>
                </div>

                <div class="col-12" dir="rtl">
                    <div class="form-group">
                        <textarea class="form-control mb-30" name="QuizAnswer">این محل ترجمه است.</textarea>
                    </div>
                </div>

                <div class="col-12 mb-30">
                    <button type="submit" class="btn uza-btn btn-2 mt-15">ارسال</button>
                </div>

                </form>

            </div>
        </div>
    </section>
    <!-- ***** Quiz Area End ***** -->

@endsection

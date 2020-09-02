@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'قوانین و مقررات')

@section('content')


<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">قوانین و مقررات همکاری با مجموعه واژه نگار</h1>
            </div>
        </div>
    </div>
    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->
<div class="mb-60"></div>
<!-- ***** Why Choose Us Area Start ***** -->
<section class="uza-why-choose-us-area" dir="rtl">
    <div class="container">
        <div class="row align-items-center">
            <!-- Choose Us Content -->
            <div class="col-lg-12 ">
                <div class="choose-us-content">
                    @foreach ($TOS as $tos)
                    <p class="static-text-title">{{$tos->TosTitle}}</p>
                    <p class="static-text-content">{{$tos->TosContent}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Why Choose Us Area End ***** -->

@endsection

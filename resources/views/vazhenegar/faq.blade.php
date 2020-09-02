@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'سوالات متداول')

@section('content')

{{-- Faq Area --}}
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">سوالات متداول</h1>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<section class="Faq-area section-padding-80">
    <div class="container" dir="rtl">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
                {{-- <div class="uza-contact-form mb-80"> --}}
                @foreach($faqs as $faq)
                <!-- Border Bottom -->
                <div class="border-line"></div>
                <br>
                <p class="static-text-title">{{$faq->q}}</p>
                <p class="static-text-content"> {{$faq->a}}</p>

                @endforeach

                {{-- </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- ***** Faq Area End ***** -->

@endsection

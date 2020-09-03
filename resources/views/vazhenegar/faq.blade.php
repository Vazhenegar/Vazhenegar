@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'سوالات متداول')

@section('content')

{{-- Faq Area --}}
<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.FaqElements.HeadSection')
<!-- ***** Breadcrumb Area End ***** -->

@include('vazhenegar.FaqElements.FaqSection')
<!-- ***** Faq Area End ***** -->

@endsection

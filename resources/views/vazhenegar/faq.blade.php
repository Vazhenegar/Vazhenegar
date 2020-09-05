@extends('vazhenegar.SharedParts.MainLayout.MasterLayout')
@section('PageTitle', 'سوالات متداول')

@section('content')

{{-- Faq Area --}}
<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.SharedParts.PageHeadSection')

<!-- ***** Breadcrumb Area End ***** -->

@include('vazhenegar.FaqElements.BodySection')
<!-- ***** Faq Area End ***** -->

@endsection

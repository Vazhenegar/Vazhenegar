@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'خدمات ترجمه')

@section('content')

{{-- translation services Area --}}
<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.SharedParts.PageHeadSection')
<!-- ***** Breadcrumb Area End ***** -->
@include('vazhenegar.TranslationServices.BodySection')
<!-- ***** translation services Area End ***** -->

@endsection

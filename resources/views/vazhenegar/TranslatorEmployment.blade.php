@extends('vazhenegar.MainLayout.MasterLayout')

@section('PageTitle', 'استخدام مترجم')

@section('content')

    {{-- employment Area --}}
    <!-- ***** Breadcrumb Area Start ***** -->
    @include('vazhenegar.SharedParts.PageHeadSection')
    <!-- ***** Breadcrumb Area End ***** -->

@include('vazhenegar.TranslatorEmployment.EmploymentForm')
    <!-- ***** employment Area End ***** -->

    {{--    script needed for employment page--}}
    @include('scripts.CoreScripts')
    @include('scripts.DatePicker')
    @include('scripts.StateCity')
    @include('scripts.TranslationFields')
    @include('scripts.TranslationLanguages')
@endsection

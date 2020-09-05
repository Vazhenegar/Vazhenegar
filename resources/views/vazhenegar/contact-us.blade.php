@extends('vazhenegar.SharedParts.MainLayout.MasterLayout')

@section('PageTitle', 'تماس با ما')

@section('content')

{{-- Contact Us Area --}}
<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.SharedParts.PageHeadSection')
<!-- ***** Breadcrumb Area End ***** -->

@include('vazhenegar.ContactUsElements.ContactForm')
<!-- ***** Contact Area End ***** -->

@endsection

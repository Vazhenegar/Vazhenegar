@extends('vazhenegar.SharedParts.MainLayout.MasterLayout')
@section('PageTitle', 'قوانین و مقررات')

@section('content')


<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.SharedParts.PageHeadSection')
<!-- ***** Breadcrumb Area End ***** -->
<div class="mb-60"></div>
<!-- ***** Terms of service body section starts ***** -->
@include('vazhenegar.TermsOfService.BodySection')
<!-- ***** Terms of service body section End ***** -->

@endsection

@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'درباره ما')

@section('content')


<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.AboutUsElements.HeadSection')
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->

@include('vazhenegar.AboutUsElements.IntroductionTabs')
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Choose Us Area Start ***** -->
@include('vazhenegar.AboutUsElements.WhyChooseUsArea')
<!-- ***** Why Choose Us Area End ***** -->

<br>
@include('vazhenegar.AboutUsElements.ClientFeedback')
<!-- ***** Client Feedback Area End ***** -->

@endsection

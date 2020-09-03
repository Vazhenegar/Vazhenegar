@extends('vazhenegar.MainLayout.MasterLayout')
@section('PageTitle', 'درباره ما')

@section('content')


<!-- ***** Breadcrumb Area Start ***** -->
@include('vazhenegar.AboutUsPageElements.HeadSection')
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->

@include('vazhenegar.AboutUsPageElements.IntroductionTabs')
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Choose Us Area Start ***** -->
@include('vazhenegar.AboutUsPageElements.WhyChooseUsArea')
<!-- ***** Why Choose Us Area End ***** -->

<br>
@include('vazhenegar.AboutUsPageElements.ClientFeedback')
<!-- ***** Client Feedback Area End ***** -->

@endsection

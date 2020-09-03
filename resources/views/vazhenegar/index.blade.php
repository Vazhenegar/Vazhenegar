@extends('vazhenegar.MainLayout.MasterLayout')

@section('PageTitle', 'صفحه اصلی')


@section('content')

        {{--if user is redirected from employment page this alert would be show to user--}}
        @if(session('status')=='Quiz Stored')
            <script>alert("مترجم گرامی درخواست شما با موفقیت ثبت شد. در صورت کسب امتیاز لازم با شما تماس گرفته خواهد شد.")</script>
        @endif

        {{-- ================================================================ --}}

        {{-- INDEX WELCOME SLIDES--}}
        @include('vazhenegar.IndexElements.IndexPageSlides')

        {{-- ================================================================ --}}

        {{-- INDEX ABOUT US AREA--}}
        @include('vazhenegar.IndexElements.IndexPageAboutUs')

        {{-- ======================================================== --}}

        {{-- INDEX OUR SERVICE AREA --}}
        @include('vazhenegar.IndexElements.IndexPageOurServices')
        {{-- ======================================================== --}}

        {{-- INDEX EMPLOYMENT AREA --}}
        @include('vazhenegar.IndexElements.IndexPageEmployment')
        {{-- ======================================================== --}}

        {{-- INDEX NEWSLETTER AREA --}}
        @include('vazhenegar.IndexElements.IndexPageNewsLetter')
        {{-- ======================================================== --}}

@endsection {{-- END OF CONTENT SECTION --}}

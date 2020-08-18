@extends('vazhenegar.layout.MasterLayout')

@section('PageTitle', 'صفحه اصلی')


@section('content')

        {{--if user is redirected from employment page this alert would be show to user--}}
        @if(session('status')=='Quiz Stored')
            <script>alert("مترجم گرامی درخواست شما با موفقیت ثبت شد. در صورت کسب امتیاز لازم با شما تماس گرفته خواهد شد.")</script>
        @endif

        {{-- ================================================================ --}}

        {{-- INDEX WELCOME SLIDES--}}
        @include('vazhenegar.IndexPageElements.IndexPageSlides')

        {{-- ================================================================ --}}

        {{-- INDEX ABOUT US AREA--}}
        @include('vazhenegar.IndexPageElements.IndexPageAboutUs')

        {{-- ======================================================== --}}

        {{-- INDEX OUR SERVICE AREA --}}
        @include('vazhenegar.IndexPageElements.IndexPageOurServices')
        {{-- ======================================================== --}}

        {{-- INDEX EMPLOYMENT AREA --}}
        @include('vazhenegar.IndexPageElements.IndexPageEmployment')
        {{-- ======================================================== --}}

        {{-- INDEX NEWSLETTER AREA --}}
        @include('vazhenegar.IndexPageElements.IndexPageNewsLetter')
        {{-- ======================================================== --}}

@endsection {{-- END OF CONTENT SECTION --}}

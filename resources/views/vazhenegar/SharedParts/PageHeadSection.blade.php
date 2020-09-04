{{--this file is to set each page head section, because oll of the pages have same head section--}}
{{--the title of page will change depending on the page user will visit--}}
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <h1 class="title">@yield('PageTitle')</h1>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
    </div>
</div>

{{--this file is to set each page head section, because oll of the pages have same head section--}}
{{--the title of page will change depending on the page user will visit--}}
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                @switch(session('PageTitle'))
                    @case('TranslationServices')
                    <h1 class="title">خدمات ترجمه</h1>
                    @break

                    @case('TranslatorEmployment')
                    <h1 class="title">استخدام مترجم</h1>
                    @break

                    @case('ContactUs')
                    <h1 class="title">تماس با ما</h1>
                    @break

                    @case('Faq')
                    <h1 class="title">سوالات متداول</h1>
                    @break

                    @case('AboutUs')
                    <h1 class="title">درباره ما</h1>
                    @break

                    @case('TOS')
                    <h1 class="title">قوانین و مقررات همکاری با مجموعه واژه نگار</h1>
                    @break

                @endswitch

            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="{{asset('images/core-img/curve-5.png')}}" alt="">
    </div>
</div>

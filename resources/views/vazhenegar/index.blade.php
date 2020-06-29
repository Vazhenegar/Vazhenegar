@extends('vazhenegar.layout.MasterLayout')

@section('PageTitle', 'صفحه اصلی')


@section('content')
{{--if user is redirected from employment page this alert would be show to user--}}
    @if(session('status')=='Quiz Stored')
        <script>alert("مترجم گرامی درخواست شما با موفقیت ثبت شد. در صورت کسب امتیاز لازم با شما تماس گرفته خواهد شد.")</script>
    @endif

    @include('vazhenegar.PageElements.IndexPageElements')

{{-- ================================================================ --}}

{{-- Index About Us Area --}}

<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="{{asset('images/site/index about us.jpg')}}" alt="">
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6" dir="rtl">
                <div class="about-us-content mb-80">
                    <h1>سایت ترجمه تخصصی آنلاین واژه نگار</h1>
                    <p>این وبسایت با بهره گیری از تخصص و مهارت مترجمین حرفه ای در رشته های مختلف تحصیلی
                        و با پشتیبانی از چندین زبان زنده دنیا در حال ارائه خدمات ترجمه است.
                    </p>

                    <p>واژه نگار بر پایه کیفیت و تعهد بر بهترین خدمات برای مشتریان بنا شده است.
                        اگر به دنبال خدمات ترجمه با کیفیت و هزینه مقرون به صرفه هستید
                        ما به خواسته های شما اهمیت داده و تلاش می کنیم بهترین خدمات را در این زمینه
                        ارائه دهیم.
                    </p>

                    <p>
                        اگر شما نیز به دانش ترجمه خود ایمان دارید، اگر به دنبال محلی برای کسب درآمد
                        هستید اما امکان راه اندازی دفتر ترجمه خود را ندارید، واژه نگار
                        این امکان را فراهم کرده تا بتوانید بدون نیاز به صرف هزینه های اضافی و
                        مهمتر از آن بصورت دورکاری به فعالیت در این زمینه بپردازید.
                    </p>
                    <a href="/about-us" class="btn uza-btn btn-2 mt-4">بیشتر</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="{{asset('images/core-img/curve-2.png')}}" alt="">
    </div>


</section>
{{-- INDEX ABOUT US AREA--}}

{{-- ======================================================== --}}

{{-- Index Our Services --}}


<section class="uza-services-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>خدمات ما</h2>
                </div>
            </div>
        </div>

        <div class="row" dir="rtl">

            <!-- Single Service Area -->
            <div class="col-12 col-lg-4">
                <div class="single-service-area mb-80">
                    <!-- Service Icon -->
                    <div class="service-icon">
                        <i class="icon_documents_alt"></i>
                    </div>
                    <h5>ترجمه دانشجویی</h5>
                    <p>
                        خدمات ترجمه مقرون به صرفه و بالاترین کیفیت برای دانشجویان رشته های مختلف تحصیلی
                        در دانشگاه ها و مراکز علمی آموزشی
                    </p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-lg-4">
                <div class="single-service-area mb-80">
                    <!-- Service Icon -->
                    <div class="service-icon">
                        <i class="icon_ribbon_alt"></i>
                    </div>
                    <h5>ترجمه نشریات بین المللی</h5>
                    <p>
                        ترجمه مقالات و نشریات بین المللی و معتبر برای ارائه در کنفرانس ها
                        و جلسات علمی
                    </p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-lg-4">
                <div class="single-service-area mb-80">
                    <!-- Service Icon -->
                    <div class="service-icon">
                        <i class="icon_book_alt"></i>
                    </div>
                    <h5>ترجمه کتاب</h5>
                    <p>
                        ترجمه کتب عمومی، تخصصی، فنی مهندسی، رمان و ... توسط مترجمان حرفه ای
                        با کمترین هزینه و کیفیت بالا
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- INDEX OUR SERVICE AREA --}}

{{-- ======================================================== --}}

{{-- Index Blog --}}

<section class="uza-blog-area">

    <!-- CTA Area Start -->
    <div class="uza-cta-area section-padding-0-80" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="cta-content mb-80">
                        <h2>مترجم یا تایپیست هستید؟</h2>
                        <h6>
                            در صورتی که تمایل به همکاری با این مجموعه را دارید
                            یا قصد دارید کسب و کار خود را آغاز کنید، می توانید
                            فرم مربوطه را در بخش <a href="/TranslatorEmployment">همکاری با ما</a> تکمیل نموده یا
                            با این شماره ها تماس بگیرید.
                        </h6>
                    </div>
                </div>

                <div class="col-12 col-lg-4 ">
                    <div class="cta-content push-down mb-80">
                        <div class="call-now-btn">
                            <span>تلفن ثابت: </span>
                            <div class="NumberDirectionFixer"> (+98) 41 3337 3592</div>
                        </div>
                        <div class="call-now-btn">
                            <span>همراه:</span>
                            <div class="NumberDirectionFixer"> (+98) 914 849 5898</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="blog-bg-curve">
        <img src="{{asset('images/core-img/curve-3.png')}}" alt="">
    </div>
</section>
<!-- CTA Area End -->

{{-- ======================================================== --}}

{{-- index NewsLetter --}}

<section class="uza-newsletter-area">
    <div class="container" dir="rtl">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2>عضویت در خبرنامه</h2>
                    <p>برای دریافت آخرین اخبار و مطالب عضو شوید</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">
                    <form action="/NewsLetterMembers" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="nl-email" value="" id="email" class="form-control"
                            value="{{ old('nl-email') }}" required>

                        @if($errors->any())
                        {{-- <label class=" form-placeholder-label" for="email"> ایمیل وارد شده اشتباه است</label> --}}
                        @else
                        <label class="form-placeholder-label" for="email">آدرس ایمیل خود را وارد کنید</label>
                        @endif
                        <button type="submit">عضویت</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>
{{-- INDEX NEWSLETTER AREA --}}

{{-- ======================================================== --}}

@endsection {{-- END OF CONTENT SECTION --}}

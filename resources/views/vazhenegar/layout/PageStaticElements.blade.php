{{-- Elements that shown in all pages, fetch from this page --}}

{{-- Preloader --}}
@section('preloader')
<div id="preloader">
    <div class="wrapper">
        <div class="cssload-loader"></div>
    </div>
</div>
@endsection

{{-- ======================================================== --}}

{{-- Header, Navbar --}}
@section('HeaderAndNav')

<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->

            <nav class="classy-navbar justify-content-between" id="uzaNav">

                {{-- logo --}}
                <a class="nav-brand" href="/"><img class="logoimagesize" src="{{asset('images/site/logo.png')}}"
                        alt=""></a>


                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">

                        <ul id="nav">
                            <li><a href="/">صفحه اصلی</a></li>
                            <li><a href="#"> لیست خدمات </a>

                                <ul class="dropdown">
                                    <li><a href="#">- خدمات ترجمه</a></li>
                                </ul>

                            </li>
                            <li><a href="/employment">همکاری با ما</a></li>
                            <li><a href="/contact-us">تماس با ما</a></li>
                            <li><a href="/faq">سوالات متداول</a></li>
                            <li><a href="/about-us">درباره ما</a></li>
                            <li><a href="/">وبلاگ</a></li>
                        </ul>

                        <!-- Login / Register -->
                        <div class="login-register-btn mx-3">
                            <a href="/login">ورود <span>/ </span> ثبت نام</a>
                        </div>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</header>
@endsection

{{-- ======================================================== --}}


{{-- Footer --}}

@section('Footer')

<footer class="footer-area section-padding-80-0">
    <div class="container">
        <!-- Border Bottom -->
        <div class="border-line"></div>
        <br>

        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">اطلاعات تماس</h4>

                    <!-- Footer Content -->
                    <div class="footer-content mb-15">
                        <h3>(+98) 41 3334 2084</h3>
                        <h3>(+98) 914 8495898</h3>
                        <p>تبریز، خیابان رضانژاد، کوی دمشقیه، کوچه عیدی <br> vazhenegar@hotmail.com</p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">دسترسی سریع</h4>

                    <!-- Nav -->
                    <nav>
                        <ul class="our-link">
                            <li><a href="/about-us">درباره ما</a></li>
                            <li><a href="/">وبلاگ</a></li>
                            <li><a href="/contact-us">تماس با ما</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">شبکه های اجتماعی</h4>
                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="fa fa-twitter"></i></a>
                        <br>

                        <a href="#" class="telegram" data-toggle="tooltip" data-placement="top" title="Telegram"><i
                                class="fa fa-telegram"></i></a>
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                class="fa fa-instagram"></i></a>

                        <br>

                        <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i
                                class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">نمادهای سایت</h4>
                    <div class="SiteSymbols">
                        <img src="{{asset('images/site/enamad.png') }}">
                        <img src="{{asset('images/site/shaparak.png') }}">
                        <br>
                        <img src="{{asset('images/site/ssl.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Copywrite Text -->
        <div class="copywrite-text col-12" dir="rtl">
            <p>تمام حقوق برای سایت واژه نگار محفوظ است. Copyright &copy; 2019</p>
        </div>
    </div>
</footer>
@endsection

{{-- ======================================================== --}}

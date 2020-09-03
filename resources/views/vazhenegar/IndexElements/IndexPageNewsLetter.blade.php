
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

<section class="Faq-area section-padding-80">
    <div class="container" dir="rtl">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
            {{-- <div class="uza-contact-form mb-80"> --}}
            @foreach($faqs as $faq)
                <!-- Border Bottom -->
                    <div class="border-line"></div>
                    <br>
                    <p class="static-text-title">{{$faq->q}}</p>
                    <p class="static-text-content"> {{$faq->a}}</p>

                @endforeach

                {{-- </div> --}}
            </div>
        </div>
    </div>
</section>

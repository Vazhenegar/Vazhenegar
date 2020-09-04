<section class="uza-why-choose-us-area" dir="rtl">
    <div class="container">
        <div class="row align-items-center">
            <!-- Choose Us Content -->
            <div class="col-lg-12 ">
                <div class="choose-us-content">
                    @foreach ($TOS as $tos)
                        <p class="static-text-title">{{$tos->TosTitle}}</p>
                        <p class="static-text-content">{{$tos->TosContent}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

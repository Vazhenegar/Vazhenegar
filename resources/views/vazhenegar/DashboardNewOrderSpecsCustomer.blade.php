<form action="/" method="post" id="NewOrderSpecCustomer">
    @csrf

    <table class="table">
        <thead>فرم پرداخت فاکتور مشتری</thead>
        <tbody>

        {{-- =============== Invoice Price =================================================== --}}
        <tr>
            <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

            <td class="pull-right">{{$Order->TotalPrice/2}} تومان </td>
        </tr>

        {{-- =============== Bank Portal =================================================== --}}
        <tr>
            <td>انتخاب درگاه بانکی:</td>
        </tr>
        <tr id="BankPortals">
            <td class="pull-right BankPortal">
                <a href="#"> <img src="{{asset('images/site/SamanPortal.jpg')}}" alt=""></a>
                <span style="font-size: 18px; color: deeppink;"> به زودی</span>
            </td>

            <td class="pull-right BankPortal">
                <a href="#"> <img src="{{asset('images/site/MellatPortal.jpg')}}" alt=""></a>
                <span style="font-size: 18px; color: deeppink;"> به زودی</span>
            </td>

            <td class="pull-right BankPortal">
                <a href="#"> <img src="{{asset('images/site/ZarrinPal.png')}}" alt=""></a>
            </td>
        </tr>

        {{-- =============== Confirm payment=============================================== --}}
        <tr>
            <td class="pull-left">
                <a href="{{$Order->id}}/{{$Order->TotalPrice/2}}/InvoiceSubmit">
                    <button type="button" class="btn btn-block"><i class="fa fa-credit-card"></i>
                        ثبت فاکتور پرداخت شده در سیستم
                    </button>
                </a>
            </td>
        </tr>

        </tbody>
    </table>
</form>

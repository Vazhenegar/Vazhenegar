@include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')


@switch($Order->status_id)
    @case(2)
    {{-- user not paid the invoice yet--}}
    <form action="{{route('Pay')}}" method="post" id="NewOrderSpecCustomer">
        @csrf

        <table class="table">
            <thead>فرم پرداخت فاکتور مشتری</thead>
            <tbody>
            <input type="hidden" name="Email" value="{{DashboardCurrentUser::$CurrentUser->Email}}">
            <input type="hidden" name="Mobile" value="{{DashboardCurrentUser::$CurrentUser->MobileNumber}}">
            <input type="hidden" name="OrderId" value="{{$Order->id}}">

            {{-- =============== Invoice Price =================================================== --}}
            <tr>
                <td class="pull-right"><span>مبلغ قابل پرداخت:</span></td>

                <td class="pull-right">
                    {{$PayablePrice=$Order->TotalPrice}} تومان
                    <input type="hidden" name="Amount" value="{{$PayablePrice}}">
                </td>
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
                    <input type="image" onclick="{{session(['OrderId'=>$Order->id,'Client'=>'zarinpal','Amount'=>$PayablePrice])}}" src="{{asset('images/site/ZarrinPal.png')}}"
                           alt="Submit Form"/>
                </td>


            </tr>

            {{--            when return back from bank portal--}}
            @if (session('bank_response'))
                <tr class="BankResponse">

                    <td class="FailedBankResponse">

                        {{'نتیجه تراکنش بانکی: '. session('bank_response') }}


                    </td>
                </tr>
            @endif

            </tbody>
        </table>
    </form>
    @break

    @case(3)
    <div class="SBankResponse">

        <p class="SuccessBankResponse">
            وضعیت سفارش:
            {{\App\OrderStatus::where('id', $Order->status_id)->value('Status')}}
            <br>
            پس از تایید واریز از طرف امور مالی، فایل شما برای مترجمین مرتبط ارسال خواهد شد.
        </p>

    </div>
    @break

    @case(4)
    <div >

        <p >
            وضعیت سفارش:
            {{$OrderStatus}}
        </p>

    </div>
    @break

@endswitch



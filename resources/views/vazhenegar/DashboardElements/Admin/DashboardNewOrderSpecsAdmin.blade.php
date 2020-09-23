{{-- =============== Related user info =================================================== --}}

<div>
    <p>
        مشخصات کاربر:<br>
        نام مشتری:
{{--        get from order controller--}}
        {{$RelatedCustomer->FirstName . ' ' . $RelatedCustomer->LastName}}
        &nbsp; &nbsp;
        تلفن همراه: {{$RelatedCustomer->MobileNumber}}
        &nbsp; &nbsp;
        تلفن ثابت: {{$RelatedCustomer->FixNumber}}
    </p>
</div>

{{-- =============== Order Status =================================================== --}}
<hr>

@switch($Order->status_id)
    {{--word count and price insertion form --}}
    @case(1)
    <form action="{{route('Order.update',[$Order->id])}}" method="post" id="NewOrderSpecAdmin">
        @csrf
        {{method_field('PATCH')}}
        <table class="table">
            <tbody>

            {{-- =============== order editing button =================================================== --}}
            <tr>
                <td class="pull-left">
                    <a href="{{route('Order.edit',[$Order->id])}}">
                        <button type="button" class="btn btn-block"><i class="fa fa-pencil"></i>
                            ویرایش مشخصات فایل
                        </button>
                    </a>
                </td>
            </tr>


            {{-- =============== word count =================================================== --}}
            <tr class="OrderPrice">
                <td class="pull-right">
                    تعداد کلمات: &nbsp;
                    <input type="text" class="pull-right form-control" name="WordCount" required>
                </td>

                {{-- =============== Price =================================================== --}}
                <td class="pull-right">
                    مبلغ کل: &nbsp;
                    <input type="text" class="pull-right form-control" name="TotalPrice" required>
                    ریال
                </td>

                {{-- =============== update =================================================== --}}
                <td class="pull-left submit">
                    <button type="submit" class="btn btn-default">بروز رسانی
                        <i class="fa fa-arrow-circle-left"></i></button>
                </td>
            </tr>

            </tbody>
        </table>
    </form>
    @break
    @case(3)
    {{--check and accept paid invoice of user--}}
    <div>
        مبلغ پرداخت شده: {{$Order->PaidPrice}} ریال
    </div>
    <div>
        شماره تراکنش: {{$Order->TrackingCode}}
    </div>
    <div>

        <a onclick="event.preventDefault();
            document.getElementById('invoice-acceptance').submit();">

            <button type="button" class="btn btn-block"><i class="fa fa-dollar"></i>
                تایید دریافت مبلغ
            </button>
        </a>
        <form id="invoice-acceptance" action="{{route('InvoiceAcceptance',[$Order->id])}}" method="POST"
              style="display: none;">
            @csrf
        </form>

    </div>
    @break

    @case(4)
    @if ($Order->ResponsibleUserId)
        <div>
            مشخصات مترجم:
            <br>
            نام مترجم:  {{$ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName}} &nbsp;
            تلفن همراه: {{$ResponsibleTranslator->MobileNumber}} &nbsp;
            تلفن ثابت: {{$ResponsibleTranslator->FixNumber}}

        </div>
    @endif

    <br><br>
    {{-- =============== send to translators =================================================== --}}
    <div class="Translators">
            <span>ارسال به مترجم: &nbsp;</span>
        <form action="{{route('AssignToTranslator',[$Order->id])}}" method="post">
            @csrf
            <div class="pull-right">
            <select class="form-control TranslatorsList" name="MatchedTranslator" required>
                <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                @foreach ($TranslatorsList as $key=>$value)
                    <option
                        value=" {{$value['id']}}">{{$value['FirstName']. ' '. $value['LastName']}}</option>
                @endforeach
            </select>

                <input type="hidden" name="TF" value="{{$Order->TranslationField}}">
                <input type="hidden" name="SL" value="{{$Order->SourceLanguage}}">
                <input type="hidden" name="DL" value="{{$Order->DestLanguage}}">
                @php(session(['TranslatorsList'=>$TranslatorsList]))
                <br>
                <button type="submit" class="btn btn-default">بروز رسانی
                    <i class="fa fa-check-circle"></i></button>
            </div>
        </form>
    </div>

    @break

    @case(5)

    <div>
        مشخصات مترجم:
        <br>
نام مترجم:  {{$ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName}} &nbsp;
        تلفن همراه: {{$ResponsibleTranslator->MobileNumber}} &nbsp;
        تلفن ثابت: {{$ResponsibleTranslator->FixNumber}}

    </div>
    @break


    @case(6)
    <div>
        مشخصات مترجم:
        <br>
        نام مترجم:  {{$ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName}} &nbsp;
        تلفن همراه: {{$ResponsibleTranslator->MobileNumber}} &nbsp;
        تلفن ثابت: {{$ResponsibleTranslator->FixNumber}}

    </div>
    <div class="pull-left">
        <a href="{{route('Download',[$Order->user_id, $Order->TranslatedOrderFile])}}"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-down"></i> دانلود فایل
            </button> </a>
    </div>
    <br>
    <hr>
    <div>

        <a onclick="event.preventDefault();
            document.getElementById('FinalCheck').submit();">

            <button type="button" class="btn btn-block"><i class="fa fa-check-circle-o"></i>
                تایید نهایی سفارش
            </button>
        </a>
        <form id="FinalCheck" action="{{route('StatusUpdate',[$Order->id,8])}}" method="POST"
              style="display: none;">
            @csrf
        </form>

    </div>

    @break

    @case(8)
    <div>
        مشخصات مترجم:
        <br>
        نام مترجم:  {{$ResponsibleTranslator->FirstName . ' '. $ResponsibleTranslator->LastName}} &nbsp;
        تلفن همراه: {{$ResponsibleTranslator->MobileNumber}} &nbsp;
        تلفن ثابت: {{$ResponsibleTranslator->FixNumber}}

    </div>
    <div class="pull-left">
        <a href="{{route('Download',[$Order->user_id, $Order->TranslatedOrderFile])}}"> <button type="button" class="btn btn-primary"><i class="fa fa-arrow-down"></i> دانلود فایل
            </button> </a>
    </div>
    @break
@endswitch

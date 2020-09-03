{{-- =============== Related user info =================================================== --}}

<div>
    <p>
        مشخصات کاربر:<br>
        نام مشتری:
        {{$RelatedCustomer->FirstName . ' ' . $RelatedCustomer->LastName}}
        &nbsp; &nbsp;
        تلفن همراه: {{$RelatedCustomer->MobileNumber}}
        &nbsp; &nbsp;
        تلفن ثابت: {{$RelatedCustomer->FixNumber}}
    </p>
</div>

{{-- =============== Order Status =================================================== --}}
<div>
    <p>وضعیت
        سفارش:&nbsp; {{\App\OrderStatus::where('id',$Order->status_id)->value('Status')}}
        &nbsp;&nbsp;&nbsp;
    </p>
</div>


@switch($Order->status_id)
    {{--word count and price insertion form --}}
    @case(1)
    <form action="/dashboard/Order/{{$Order->id}}" method="post" id="NewOrderSpecAdmin">
        @csrf
        {{method_field('PATCH')}}
        <table class="table">
            <tbody>

            {{-- =============== order editing button =================================================== --}}
            <tr>
                <td class="pull-left">
                    <a href="{{$Order->id}}/edit">
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
        مبلغ پرداخت شده: {{$Order->PaidPrice}} تومان
    </div>
    <div>

        <a onclick="event.preventDefault();
            document.getElementById('invoice-acceptance').submit();">

            <button type="button" class="btn btn-block"><i class="fa fa-dollar"></i>
                تایید دریافت مبلغ
            </button>
        </a>
        <form id="invoice-acceptance" action="/dashboard/InvoiceAcceptance/{{$Order->id}}" method="POST"
              style="display: none;">
            @csrf
        </form>

    </div>
    @break

    @case(4)
    {{-- =============== send to translators =================================================== --}}
    <div class="Translators">
            <span>ارسال به مترجم: &nbsp;</span>

            <select class="form-control TranslatorsList" name="TranslatorsList" required>
                <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                @foreach ($TranslatorsList as $key=>$value)
                    <option
                        value=" {{$value['id']}}">{{$value['FirstName']. ' '. $value['LastName']}}</option>
                @endforeach
            </select>
        <br>
        <a>
            <button type="button" class="btn btn-default">تایید
                <i class="fa fa-check"></i></button>
        </a>
    </div>
    @break

@endswitch

<form action="/dashboard/Order/{{$Order->id}}" method="post" id="NewOrderSpecAdmin">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <table class="table">
        <thead>بخش مدیر</thead>
        <tbody>

        {{-- =============== related customer =================================================== --}}
        <tr>
            <td class="pull-right">
                نام مشتری:
                 {{$RelatedCustomer->FirstName . ' ' . $RelatedCustomer->LastName}}
            </td>
            &nbsp;
            <td class="pull-right">
                تلفن همراه: {{$RelatedCustomer->MobileNumber}}
            </td>
            &nbsp;
            <td class="pull-right">
                تلفن ثابت: {{$RelatedCustomer->FixNumber}}
            </td>
        </tr>

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

        {{-- =============== Order Status =================================================== --}}
        <tr>
            <td>وضعیت
                سفارش:&nbsp; {{\App\OrderStatus::where('id',$Order->status_id)->value('Status')}}
                &nbsp;&nbsp;&nbsp;
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
        {{-- =============== send to translators =================================================== --}}
        <tr>
            <td class="Translators">
                <span>ارسال به مترجم: &nbsp;</span>

                <select class="form-control" name="TranslatorsList" required>
                    <option value="0">تمام مترجمان در زمینه و زبان یکسان</option>
                    @foreach ($TranslatorsList as $key=>$value)
                        <option
                            value=" {{$value['id']}}">{{$value['FirstName']. ' '. $value['LastName']}}</option>
                    @endforeach
                </select>
            </td>

            <td class="pull-left">
                <button type="button" class="btn btn-default">تایید
                    <i class="fa fa-check"></i></button>
            </td>
        </tr>

        </tbody>
    </table>
</form>

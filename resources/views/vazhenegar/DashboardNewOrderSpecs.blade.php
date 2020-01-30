@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'مشخصات سفارش جدید')
@php
    $CurrentUser=Auth::user();
    $Role=$CurrentUser->role()->value('RoleName');
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus=MenuPicker($CurrentUser);
@endphp

@section('content')
    {{--=================== New order for customer  =================================--}}
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-7">

            <div class="box box-primary NewOrder">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">مشخصات سفارش جدید</h3>
                </div>

                <div class="box-body">
                    <table class="table" id="NewOrderSpecs">
                        <tbody>
                        <tr>
                            <td class="pull-right">شماره سفارش: {{$Order->id}}</td>
                            <td class="pull-left"> تاریخ ثبت: <span dir="ltr">{{$Order->RegisterDate}}</span></td>
                        </tr>
                        <tr>
                            <td>موضوع سفارش: {{$Order->OrderSubject}}</td>
                        </tr>
                        <tr>
                            <td class="pull-right">زمینه: {{$Order->TranslationField}}</td>
                            <td class="pull-right">زبان مبدا: {{$Order->SourceLanguage}}</td>
                            <td class="pull-right">زبان مقصد: {{$Order->DestLanguage}}</td>
                        </tr>
                        <tr>
                            <td>بخش های مورد نیاز برای ترجمه:</td>
                        </tr>
                        <tr>
                            <td>
                                @php
                                    $TP=$Order->TranslationParts;
                                    $TP=unserialize($TP);
                                    if ($TP){
                                    foreach ($TP as $item){
                                        echo '<i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp';
                                        echo $item.'&nbsp &nbsp';
                                    }
                                    }
                                    else{
                                        echo "<span style='color: red;'> موردی انتخاب نشده است، فقط متن اصلی ترجمه شود.</span>";
                                    }
                                @endphp
                            </td>
                        </tr>

                        <tr>
                            <td class="pull-right">تعداد کلمات:&nbsp; {{$Order->Amount}}  &nbsp;&nbsp;&nbsp;</td>
                            <td class="pull-right">قیمت: &nbsp;{{$Order->TotalPrice}}</td>
                        </tr>

                        <tr>
                            <td class="pull-right"> تاریخ تحویل: <span dir="ltr">{{$Order->DeliveryDate}}</span></td>
                            <td class="pull-left">زمان تا تحویل سفارش:
                                @php
                                    $Time=Verta::parse($Order->DeliveryDate);
                                     if($Time->gt(Verta::now())){
                                         $days=abs($Time->diffDays());
                                         $hours=floor(abs($Time->diffMinutes())/60-($days*24));
                                         $minutes=abs($Time->diffMinutes())%60;
                                     }
                                     else{
                                         $days=0;
                                         $hours=0;
                                         $minutes=0;
                                     }
                                @endphp

                                {{$days. ' روز و ' . $hours . ' ساعت و ' . $minutes . ' دقیقه'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="pull-right">توضیحات مشتری:</td>
                        </tr>
                        <tr>
                            @if($Order->Description)
                                <td>{!!nl2br($Order->Description)!!}</td>
                            @else
                                <td><span style='color: red;'> بدون توضیحات</span></td>
                            @endif
                        </tr>
                        <tr>
                            <td class="pull-left">
                                <button type="button" class="btn btn-success"><i class="fa fa-arrow-down"></i> دانلود
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    @if($Role=='مدیر')
                        <form action="/dashboard/Order/{{$Order->id}}" method="post" id="NewOrderSpecAdmin">
                            {{ csrf_field() }}
                            {{method_field('PATCH')}}
                            <table class="table">
                                <hr>
                                <thead>بروز رسانی مشخصات فایل</thead>
                                <tbody>

                                {{-- =============== word count =================================================== --}}
                                <tr>
                                    <td class="pull-right">
                                        تعداد کلمات: &nbsp;
                                        <input type="text" class="pull-right form-control" name="WordCount"
                                               required>
                                    </td>

                                    {{-- =============== Price =================================================== --}}
                                    <td class="pull-right">
                                        قیمت: &nbsp;
                                        <input type="text" class="pull-right form-control" name="TotalPrice" required>
                                    </td>

                                    {{-- =============== ٍعذئهف =================================================== --}}
                                    <td class="pull-left submit">
                                            <button type="submit" class="pull-left btn btn-default">بروز رسانی
                                                <i class="fa fa-arrow-circle-left"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    @elseif($Role=='مترجم')
                        {{'این کاربر مترجم است'}}
                    @endif
                    {{--if the order status updated successfully an alert box would be show to admin--}}
                    @if(session('OrderStatus')=='Updated')
                        <script>alert("مشخصات سفارش با موفقیت بروز رسانی شد. در حال انتظار برای پرداخت مبلغ از سوی مشتری.")</script>
                    @endif
                </div>


            </div>

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            @include('vazhenegar.DashboardCalendar')

        </section>
        <!-- left col -->

    </div>
@endsection

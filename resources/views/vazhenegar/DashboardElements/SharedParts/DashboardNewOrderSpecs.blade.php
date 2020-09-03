@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'مشخصات سفارش جدید')

@section('content')
@include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')
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
                            <td class="pull-right">تعداد کلمات:&nbsp; {{$Order->Amount}} &nbsp;&nbsp;&nbsp;</td>
                            <td class="pull-right">مبلغ کل: &nbsp;{{$Order->TotalPrice}} &nbsp; تومان</td>
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
                                <a href="{{route('Download',['user_id'=>$Order->user_id, 'OrderFile'=>$Order->OrderFile])}}"> <button type="button" class="btn btn-success"><i class="fa fa-arrow-down"></i> دانلود فایل
                                </button> </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <hr>

                    @if(DashboardCurrentUser::$Role=='مدیر')
                        @include('vazhenegar.DashboardElements.Admin.DashboardNewOrderSpecsAdmin')
                    @elseif(DashboardCurrentUser::$Role=='مترجم')
                        {{'این کاربر مترجم است'}}
                    @elseif(DashboardCurrentUser::$Role=='مشتری' && $Order->user_id==DashboardCurrentUser::$CurrentUser->id && $Order->TotalPrice)
                        @include('vazhenegar.DashboardElements.Customer.DashboardNewOrderSpecsCustomer')
                    @endif

                    {{--if the order status updated successfully an alert box would be show to admin--}}
                    @if(session('OrderStatus')=='Updated')
                        <script>alert("مشخصات سفارش با موفقیت بروز رسانی شد.")</script>
                    @elseif(session('OrderStatus')=='PriceAdded')
                        <script>alert("وضعیت سفارش با موفقیت بروز رسانی شد. در حال انتظار برای پرداخت مبلغ از سوی مشتری.")</script>
                    @endif
                </div>


            </div>

        </section>
        <!-- /.right col -->


        <!-- left col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5">
            @include('vazhenegar.DashboardElements.SharedParts.DashboardCalendar')

        </section>
        <!-- left col -->

    </div>
@endsection

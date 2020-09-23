@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'سفارشات')

@section('content')

    @include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')

    @switch(DashboardCurrentUser::$Role)
        @case('مدیر')
        @include('vazhenegar.DashboardElements.Admin.DashboardAdminBadges')
        @break

        @case('مترجم')
        @include('vazhenegar.DashboardElements.Translator.DashboardTranslatorBadges')
        @break

        @case('مشتری')
        @include('vazhenegar.DashboardElements.Customer.DashboardCustomerBadges')
        @break
    @endswitch

    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-star"></i>
            @switch($StatusId)

                {{--      =======================================  Admin Start--}}
                {{--      ================== New Registered Orders --}}
                @case('1')
                <?php
                if (DashboardCurrentUser::$Role=='مشتری')
                    echo '<h3 class="box-title">لیست سفارشات ثبت شده</h3>';
                else
                    //For both admin and translator, title would be this
                    echo '<h3 class="box-title">لیست سفارشات جدید</h3>';

                ?>
                @break

                {{--      ================== Invoices for customer --}}
                @case('2')
                    <h3 class="box-title">فاکتورهای صادر شده</h3>

                @break

 {{--      ================== Paid Orders --}}
                @case('3')

                    <h3 class="box-title">لیست سفارشات دریافتی</h3>

                @break


                {{--      ================== Assign to translators Orders --}}
                @case('4')
                <?php
                if (DashboardCurrentUser::$Role=='مترجم')
                    echo '<h3 class="box-title">لیست سفارشات جدید</h3>';
                else
                    echo '<h3 class="box-title">لیست سفارشات آماده ارائه به مترجم</h3>';

                ?>

                @break



                {{--      ================== In Progress Orders --}}
                @case('5')
                <h3 class="box-title">لیست سفارشات در حال انجام</h3>
                @break



                {{--      ================== Final check for Orders --}}
                @case('6')
                <?php
                if (DashboardCurrentUser::$Role=='مترجم')
                    echo '<h3 class="box-title">لیست سفارشات تحویل شده</h3>';
                else
                    echo '<h3 class="box-title"></h3>';

                ?>
                @break





                {{--      ================== Final check for Orders --}}
                @case('7')
                <h3 class="box-title">لیست سفارشات جهت بررسی نهایی</h3>
                @break



                {{--      ================== Finished Orders --}}
                @case('8')
                <h3 class="box-title">لیست سفارشات تکمیل شده</h3>
                @break



                {{--      ================== Customer rejected Orders --}}
                @case('9')
                <h3 class="box-title">لیست سفارشات لغو شده</h3>
                @break


                {{--      ================== Translator rejected Orders --}}
                @case('10')
                <h3 class="box-title">لیست سفارشات لغو شده</h3>
                @break

                {{--      ==================  All Orders List--}}
                @case('')
                <h3 class="box-title">لیست تمام سفارشات</h3>
                @break

                {{--      ==============================  Admin End--}}


                {{--      ======================  Setting Start--}}
                {{--      ==================  Admin--}}
                {{--      =====  Bank Setting--}}
                @case('BankList')
                <h3 class="box-title">لیست بانک ها</h3>
                <button type="button" class="btn btn-success" onclick="ShowNewBankRow()"><i class="fa fa-plus"></i> افزودن بانک جدید</button>
                @break
                {{--      =====  Bank Setting End--}}
                {{--      ====================  Admin end--}}
                {{--      ============================  Setting End--}}

            @endswitch
        </div>
        <!-- /.box-header -->


        <div class="box-body">

            <table class="table table-bordered" id="OrdersTable">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">شماره سفارش</th>
                    <th scope="col">موضوع</th>
                    <th scope="col">تاریخ ثبت</th>
                    <th scope="col">تاریخ تحویل</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @if(count($List)==0)
                    <tr>
                        <td align='center' colspan='8'>موردی وجود ندارد</td>
                    </tr>
                @else
                    <?php
                    $counter = 1;
                    foreach ($List as $order) {
                        echo '<tr>';
                        echo '<td>' . $counter++ . '</td>';
                        echo '<td>' . $order['id'] . '</td>';
                        echo '<td>' . $order['OrderSubject'] . '</td>';
                        echo '<td class="NumberDirectionFixer">' . $order['RegisterDate'] . '</td>';
                        echo '<td class="NumberDirectionFixer">' . $order['DeliveryDate'] . '</td>';
                        echo '<td>' . $order['Status'] . '</td>';
                        echo '<td>' .
                            '<a href="' . route('Order.show', [$order['id']]) . '"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp' .
                            '</td>';
                        echo '</tr>';
                    }
                    ?>
                @endif
                </tbody>
            </table>


        </div>
        <!-- /.box-body -->
    </div>


{{--    --}}{{--show add new bank info row in (setting-> banks) table --}}
{{--    <script>--}}
{{--        function ShowNewBankRow() {--}}
{{--            document.getElementById('AddNewBank').style.display = 'contents';--}}
{{--        }--}}
{{--    </script>--}}

@endsection

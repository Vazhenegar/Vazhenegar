@extends('auth.DashboardLayout.DashboardMasterLayout')
@section('Title', 'سفارشات')

@section('content')

    @include('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser')

    @switch(DashboardCurrentUser::$Role)
        @case('مدیر')
        @include('vazhenegar.DashboardElements.Admin.DashboardAdminBadges')
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
                if ($UserId && DashboardCurrentUser::$Role=='مشتری')
                    echo '<h3 class="box-title">لیست سفارشات جاری</h3>';
                else
                    //For both admin and translator, title would be this
                    echo '<h3 class="box-title">لیست سفارشات جدید</h3>';

                ?>
                @break

                {{--      ================== Paid Orders --}}
                @case('2')
                <?php
                if ($UserId && DashboardCurrentUser::$Role=='مشتری')
                    echo '<h3 class="box-title">فاکتورهای صادر شده</h3>';
                else
                    echo '<h3 class="box-title">لیست سفارشات دریافتی</h3>';
                ?>
                @break


                {{--      ================== In Progress Orders --}}
                @case('5')
                <h3 class="box-title">لیست سفارشات در حال انجام</h3>
                @break


                {{--      ================== Rejected Orders --}}
                @case('10')
                <h3 class="box-title">لیست سفارشات لغو شده</h3>
                @break


                {{--      ================== Rejected Orders --}}
                @case('8')
                <h3 class="box-title">لیست سفارشات تکمیل شده</h3>
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

                @if($List==null)
                    <tr>
                        <td align='center' colspan='8'>سفارشی وجود ندارد</td>


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


    {{--        // ====================  Refresh Orders List every 30 seconds ===================--}}
    <script>

        let Role =@json(DashboardCurrentUser::$Role);
        let userId = '';
        if (Role != 'مدیر') {
            userId =@json(DashboardCurrentUser::$id);
        }
        let statusId = "{{session('StatusId')}}";

        setInterval(function () {

            $.ajax({
                type: "GET",
                url: '/dashboard/OrdersList/' + statusId + '/' + userId,
                dataType: 'json',
                success: function (response) {
                    let len = 0;
                    $('#OrdersTable tbody').empty(); // Empty <tbody>
                    if (response != null) {
                        len = response.length;
                    }
                    if (len > 0) {
                        for (let i = 0; i < len; i++) {
                            let OrderId = response[i].id;
                            let OrderSubject = response[i].OrderSubject;
                            let RDate = response[i].RegisterDate;
                            let DDate = response[i].DeliveryDate;
                            let Status = response[i].Status;
                            let StatusDescription = response[i].StatusDescription;

                            let tr =
                                "<tr>" +
                                "<td>" + (i + 1) + "</td>" +
                                "<td>" + OrderId + "</td>" +
                                "<td>" + OrderSubject + "</td>" +
                                "<td class='NumberDirectionFixer'>" + RDate + "</td>" +
                                "<td class='NumberDirectionFixer'>" + DDate + "</td>" +
                                "<td><a data-toggle='tooltip' data-placement='bottom' title=' + StatusDescription + '>" + Status + "</a></td>" +
                                "<td>" +
                                "<a href='/Order/" + OrderId + "'><button type='button' class='btn btn-primary'><i class='fa fa-eye'></i></button></a>" + "&nbsp;" +
                                "</td>" +
                                "</tr>";
                            $("#OrdersTable tbody").append(tr);
                        }

                    } else {
                        let tr_str = "<tr>" +
                            "<td align='center' colspan='9'>سفارش جدیدی وجود ندارد</td>" +
                            "</tr>";

                        $("#OrdersTable tbody").append(tr_str);
                    }

                }
            });
        }, 30000);


    </script>

    {{--show add new bank info row in (setting-> banks) table --}}
    <script>
        function ShowNewBankRow() {
            document.getElementById('AddNewBank').style.display = 'contents';
        }
    </script>





@endsection

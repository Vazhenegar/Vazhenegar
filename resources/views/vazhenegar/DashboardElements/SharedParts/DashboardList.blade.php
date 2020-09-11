{{--=================== Orders List based on usertype and page===================--}}
{{--this page will get user role  and list type session and show to user--}}
{{--all users will use this file for viewing any kind of list (orders, employ--}}

<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-star"></i>

        @switch(session('List'))
            {{--      ==================      Admin--}}
            {{--      ================  Setting Start--}}
            {{--      =====  Bank Setting--}}
            @case('BankList')
            <h3 class="box-title">لیست بانک ها</h3>
            <button  type="button" class="btn btn-success" onclick="ShowNewBankRow()"><i class="fa fa-plus"></i> افزودن بانک جدید</button>
            @break

            {{--      ================  Setting End--}}
            {{--      ======================      Admin end--}}


            @case('AllOrders')
            <h3 class="box-title">لیست تمام سفارشات</h3>
            @break

            @case('NewOrders')
            <h3 class="box-title">لیست سفارشات جدید</h3>
            @break

            @case('ReceivedOrders')
            <h3 class="box-title">لیست سفارشات دریافتی</h3>
            @break

            @case('InProgressOrders')
            <h3 class="box-title">لیست سفارشات در حال انجام</h3>
            @break

            @case('CancelledOrders')
            <h3 class="box-title">لیست سفارشات لغو شده</h3>
            @break

            @case('FinishedOrders')
            <h3 class="box-title">لیست سفارشات تکمیل شده</h3>
            @break

            @case('DeliveredOrders')
            <h3 class="box-title">لیست سفارشات تحویل شده</h3>
            @break

        @endswitch
    </div>
    <!-- /.box-header -->

    <div class="box-body">
        {{--      =======================================      Admin--}}
        {{--      =========================  Setting Start--}}
        {{--      =====  Bank Setting--}}
        @switch(session('List'))
            @case('BankList')
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام بانک</th>
                    <th scope="col">لوگوی بانک</th>
                    <th scope="col">کد مرچنت</th>
                    <th scope="col">عملیات</th>
                </tr>
                </thead>
                <tbody>

                {{--                this row will shown when admin want to add new bank info do db and opens in the first line of table--}}
                <tr style="display:none;" id="AddNewBank">
                    <form action="/dashboard/Bank" method="post" enctype="multipart/form-data">
                        @csrf
                    <td></td>
                    <td><input type="text" name="BankName" maxlength="20" placeholder="نام بانک را وارد کنید" required/></td>
                    <td><input type="file" name="Logo"/></td>
                    <td><input type="text" name="MerchantCode" placeholder="کد مرچنت بانک را وارد کنید" required/></td>
                    <td>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> تایید</button>
                    </td>
                    </form>
                </tr>

                {{--    this will show all banks list to admin, $BankList is comming from BankController--}}
                @if(count($BankList)==0)
                    <tr>
                        <td align='center' colspan='9'>مشخصات بانکی ثبت نشده است</td>

                    </tr>

                @else

                    @php
                        $counter=1;
                     foreach($BankList as $list){

                        echo '<tr>';
                            echo '<td>'.$counter++.'</td>';
                            echo '<td>'.$list['BankName'].'</td>';
                            echo '<td><img src="{{asset(\'images/site/'.$list['Logo'].')}}"></td>';
                            echo '<td>'.$list['MerchantCode'].'</td>';
                            echo '<td>'.
                                 '<a href="/dashboard/Order/'.$list['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
                                 '<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>&nbsp'.
                             '</td>';
                         echo '</tr>';
                     }

                    @endphp
                @endif
                </tbody>

            </table>
            @break
            {{--            Bank setting End--}}

            {{--      =========================  Setting End--}}


            {{--      =========================  Orders Start--}}
            {{--      =====  All Orders --}}
            @case('AllOrders')
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
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

                {{--    this will show new, finished, cancelled and all type of orders depending on user role--}}
                @php
                    $Orders=GetOrders();
                @endphp
                @if(count($Orders)==0)
                    <tr>
                        <td align='center' colspan='9'>سفارش جدیدی وجود ندارد</td>
                    </tr>
                @else
                    @php
                        $counter=1;
                     foreach($Orders as $order){
                        echo '<tr>';
                        echo '<td>'.$counter++.'</td>';
                        echo '<td>'.$order['id'].'</td>';
                        echo '<td>'.$order['OrderSubject'].'</td>';
                        echo '<td class="NumberDirectionFixer">'.$order['RegisterDate'].'</td>';
                        echo '<td class="NumberDirectionFixer">'.$order['DeliveryDate'].'</td>';
                        echo '<td><a data-toggle="tooltip" data-placement="bottom" title="'.$order['StatusDescription'].'">'.$order['Status'].'</a></td>';
                        echo '<td>'.
                             '<a href="/dashboard/Order/'.$order['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
                             '<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>&nbsp'.
                         '</td>';
                         echo '</tr>';
                     }
                    @endphp
                @endif
                </tbody>
            </table>
            @break
            {{--      =====  New Orders End--}}



        @endswitch


    </div>
    <!-- /.box-body -->
</div>


{{--        // ====================  Refresh Orders List every 30 seconds ===================--}}
<script>

    setInterval(function () {

        $.ajax({
            type: "GET",
            url: '/dashboard/OrdersList',
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
                            "<td><a data-toggle='tooltip' data-placement='bottom' title='" + StatusDescription + "'>" + Status + "</a></td>" +
                            "<td>" +
                            "<a href='dashboard/Order/" + OrderId + "'><button type='button' class='btn btn-primary'><i class='fa fa-eye'></i></button></a>" + "&nbsp;" +
                            "<button type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button>" + "&nbsp;" +
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
    function ShowNewBankRow(){
    document.getElementById('AddNewBank').style.display = 'contents';
    }
</script>

{{--=================== Orders List  =================================--}}


<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-star"></i>

        <h3 class="box-title">لیست سفارشات جدید</h3>
        <!-- tools box -->
        <div class="pull-left box-tools">
            <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i
                    class="fa fa-minus"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <table class="table table-bordered" id="NewOrdersTable">
            <thead>
            <tr >
                <th scope="col">ردیف</th>
                <th scope="col">موضوع</th>
                <th scope="col">تاریخ ثبت</th>
                <th scope="col">تاریخ تحویل</th>
                <th scope="col">زمینه</th>
                <th scope="col">زبان مبدا</th>
                <th scope="col">زبان مقصد</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @php $counter=1; @endphp
            @if(count($allNewRegisteredOrders['orders'])==0)
                <tr>
                    <td align='center' colspan='8'>سفارش جدیدی وجود ندارد</td>
                </tr>
            @else
                @foreach($allNewRegisteredOrders['orders'] as $order)

                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$order['OrderSubject']}}</td>
                        <td>{{$order['RegisterDate']}}</td>
                        <td>{{$order['DeliveryDate']}}</td>
                        <td>{{$order['TranslationField']}}</td>
                        <td>{{$order['SourceLanguage']}}</td>
                        <td>{{$order['DestLanguage']}}</td>

                        <td>
                            <button type='button' class='btn btn-primary'><i class='fa fa-eye'></i></button>
                            <button type='button' class='btn btn-success'><i class='fa fa-arrow-down'></i></button>
                            <button type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->

</div>

{{--=================== End Of Orders List  =================================--}}

{{-- Scripts for new orders that customers registered --}}
<script>
    // ====================  Refresh Orders List every 30 seconds ===================
    // ====================  for new orders ===================
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/AllNewRegisteredOrders',
            dataType: 'json',
            success: function (response) {
                let len = 0;
                $('#NewOrdersTable tbody').empty(); // Empty <tbody>
                if (response['orders'] != null) {
                    len = response['orders'].length;
                }
                if (len > 0) {
                    for (let i = 0; i < len; i++) {
                        let OrderSubject = response['orders'][i].OrderSubject;
                        let RegisterDate = response['orders'][i].RegisterDate;
                        let DeliveryDate = response['orders'][i].DeliveryDate;
                        let TranslationField = response['orders'][i].TranslationField;
                        let SourceLanguage = response['orders'][i].SourceLanguage;
                        let DestLanguage = response['orders'][i].DestLanguage;

                        let tr =
                            "<tr>" +
                            "<td id='Row'>" + (i + 1) + "</td>" +
                            "<td id='OrderSubject'>" + OrderSubject + "</td>" +
                            "<td id='RegisterDate'>" + RegisterDate + "</td>" +
                            "<td id='DeliveryDate'>" + DeliveryDate + "</td>" +
                            "<td id='TranslationField'>" + TranslationField + "</td>" +
                            "<td id='SourceLanguage'>" + SourceLanguage + "</td>" +
                            "<td id='DestLanguage'>" + DestLanguage + "</td>" +
                            "<td>" +
                            "<button type='button' class='btn btn-primary'><i class='fa fa-eye'></i></button>" + "&nbsp;" +
                            "<button type='button' class='btn btn-success'><i class='fa fa-arrow-down'></i></button>" + "&nbsp;" +
                            "<button type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button>" + "&nbsp;" +
                            "</td>" +
                            "</tr>";

                        $("#NewOrdersTable tbody").append(tr);
                    }

                } else {
                    let tr_str = "<tr>" +
                        "<td align='center' colspan='8'>سفارش جدیدی وجود ندارد</td>" +
                        "</tr>";

                    $("#NewOrdersTable tbody").append(tr_str);
                }

            }
        });
    }, 30000);

</script>

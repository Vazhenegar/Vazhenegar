{{--================ Badges For Customer ====================================--}}
<!-- Small boxes (Stat box) -->
<div class="row">
    {{--==================== Current Orders ================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3 id="CustomerNewOrders"></h3>

                <p>سفارشات جاری</p>
            </div>
            <div class="icon">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--=================== Finished Orders =================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3 id="CustomerFinishedOrders">12</h3>
                <p>سفارشات تکمیل شده</p>
            </div>
            <div class="icon">
                <i class="fa fa-check-square-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--==================== Messages ================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3 id="CustomerMessages">12</h3>

                <p>پیام ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope-open-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--=================== Invoices  =================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-gradient">
            <div class="inner">
                <h3 id="CustomerInvoices">12</h3>

                <p>فاکتور ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
{{--=================== End Of Customer Badges   =================================--}}

<script>
    let CurrentCustomerId=@json($CustomerId); //Get from dashboard
    let CustomerRegisteredOrders =@json(count($CustomerRegisteredOrders)); //Get from dashboard

    document.getElementById('CustomerNewOrders').innerHTML = CustomerRegisteredOrders;

    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}
    {{--  ====================  for User New Orders ===================--}}
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/CustomersRegisteredOrders/'+CurrentCustomerId,
            success: function (data) {
                document.getElementById('CustomerNewOrders').innerHTML = CustomerRegisteredOrders;
            }
        });
    }, 30000);

</script>
